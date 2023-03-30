<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trajet', ['trips' => $trips]);
    }

    public function create()
    {
        return view('trajet');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstlocation' => 'required',
            'secondlocation' => 'required',
            'price' => 'required|numeric',
        ]);

        Trip::create([
            'firstlocation' => $request->firstlocation,
            'secondlocation' => $request->secondlocation,
            'price' => $request->price,
        ]);

        return redirect()->route('trips.index')->with('success', 'Trip created successfully.');
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('trajet-edit', ['trip' => $trip]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstlocation' => 'required',
            'secondlocation' => 'required',
            'price' => 'required|numeric',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->update([
            'firstlocation' => $request->firstlocation,
            'secondlocation' => $request->secondlocation,
            'price' => $request->price,
        ]);

        return redirect()->route('trips.index')->with('success', 'Trip updated successfully.');
    }

    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();

        return redirect()->route('trips.index')->with('success', 'Trip deleted successfully.');
    }
    public function show(): View{
        return view('trajet');
    }
}
