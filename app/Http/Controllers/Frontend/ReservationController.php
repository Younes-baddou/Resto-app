<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'tel_number' => ['required'],
            'guest_number' => ['required'],
        ]);

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }
    public function stepTwo(Request $request)
    {
        
        $reservation = $request->session()->get('reservation');

        // Vérifiez si $reservation est null
        if (!$reservation) {
            // Redirigez l'utilisateur avec un message d'erreur
            return redirect()->route('reservations.step.one')->with('error', 'Veuillez commencer la réservation depuis le début.');
        }

        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            if ($value->res_date instanceof Carbon && $reservation->res_date instanceof Carbon) {
                return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
            }
            return false; // Retourne false si l'une des dates n'est pas une instance de Carbon
        })->pluck('table_id');

        $tables = Table::where('status', TableStatus::Avaliable)
            ->where('guest_number', '>=', $reservation->guest_number)
            ->whereNotIn('id', $res_table_ids)->get();

        if ($tables->isEmpty()) {
            return to_route('reservations.step.one')->with('warning', 'Sorry,there is no table available for this time slot.');
        }

        return view('reservations.step-two', compact('reservation', 'tables'));
    }



    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);

        $reservation = $request->session()->get('reservation');

        if (!$reservation) {
            // Redirigez l'utilisateur avec un message d'erreur
            return redirect()->back()->with('error', 'An error has occurred, please try again later.');
        }

        $reservation->fill($validated);
        $reservation->save();

        // Mise à jour du statut de la table à 'indisponible' une fois la réservation effectuée
        $table = Table::find($reservation->table_id);
        if ($table) {
            $table->update(['status' => TableStatus::Unavaliable]);
        }

        $request->session()->forget('reservation');

        return redirect()->route('thankyou');
    }
}
