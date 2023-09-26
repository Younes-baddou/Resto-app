<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Reservation;


class TableController extends Controller
{
    public function index()
    {
        $tables = table::all();
        return view('Admin.tables.index', compact('tables'));
    }

    public function create()
    {
        return view('Admin.tables.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(TableStoreRequest $request)
    {

        Table::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
        ]);

        return to_route('Admin.tables.index')->with('success', 'Table created succesfully.');;
    }

    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }
    public function update(TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());
        return to_route('Admin.tables.index')->with('success', 'Table updated succesfully.');;
    }

    public function destroy(Table $table)
{
    // Supprimer toutes les réservations associées à cette table
    Reservation::where('table_id', $table->id)->delete();

    // Supprimer la table
    $table->delete();

    return redirect()->route('Admin.tables.index')->with('danger', 'Table and associated reservations deleted successfully.');
}

}
