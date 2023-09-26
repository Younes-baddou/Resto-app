<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function create()
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        return view('admin.reservations.create', compact('tables'));
    }

    public function store(ReservationStoreRequest $request)
    {
        $table = table::findOrfail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on the number of guests');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            $res_date = Carbon::parse($res->res_date);
            if ($res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'this table is reserved for this time.');
            }
        }
        // ... Votre code existant ...

        Reservation::create($request->all());

        // Update the table status to 'unavailable' once the reservation is made
        $table->update(['status' => TableStatus::Unavaliable]);

        return to_route('Admin.reservations.index')->with('success', 'Reservation created succesfully');
    }

    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $tables = Table::all();
        return view('admin.reservations.edit', compact('reservation', 'tables'));
    }

    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = table::findOrfail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on the number of guests');
        }
        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        foreach ($reservations as $res) {
            $res_date = Carbon::parse($res->res_date);
            if ($res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'this table is reserved for this time.');
            }
        }
        $reservation->update($request->validated());
        return to_route('Admin.reservations.index')->with('success', 'Reservation updated successfully');
    }

    public function destroy(Reservation $reservation)
    {
        // Update the table status to 'available' when the reservation is canceled
        $reservation->table->update(['status' => TableStatus::Avaliable]);
    
        $reservation->delete();
    
        return redirect()->route('Admin.reservations.index')->with('danger', 'Reservation deleted succesfully');
    }
    
}
