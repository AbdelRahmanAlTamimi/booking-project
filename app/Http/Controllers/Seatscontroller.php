<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Models\seats;
use Illuminate\Http\Request;

class Seatscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalSeats = \App\Models\seats::count();

        $query = \App\Models\seats::query();
        $roleFilter = $request->input('seat_class'); 

        if ($roleFilter) {
            $query->where('seat_class', $roleFilter);
        }
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($search) {
                $query->where('seat_id', 'like', '%' . $search . '%')
                    ->orWhere('flight_id', 'like', '%' . $search . '%')
                    ->orWhere('seat_number', 'like', '%' . $search . '%');
            });
        }

        $perPage = min($request->input('per-page', 10), $maxPerPage);

        $seats = $query->paginate($perPage);

        return view('AdminDashboard.seats.index', compact('seats', 'totalSeats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flights = Flights::all();

        return view('AdminDashboard.seats.create', compact('flights'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|exists:flights,flight_id',
            'seat_number' => 'nullable|string',
            'seat_class' => 'nullable|in:Economy,Business,First',
        ]);

        $seat = new \App\Models\seats();
        $seat->flight_id = $request->flight_id;
        $seat->seat_number = $request->seat_number;
        $seat->seat_class = $request->seat_class;
        $seat->save();

        return redirect()->route('seats.index')->with('success', 'Seat created successfully.');
    }
    public function edit($id)
    {
        $seat = seats::where('seat_id', $id)->first();

        $flights = Flights::all();

        return view('AdminDashboard.seats.edit', compact('seat', 'flights'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'flight_id' => 'required|exists:flights,flight_id',
            'seat_number' => 'required|string|max:255',
            'seat_class' => 'required|in:Economy,Business,First',
            // 'flight_id' => 'required|in:Economy,Business,First',
        ]);

        $seat = seats::where('seat_id', $id)->first();

        $seat->update($validatedData);

        $flight = Flights::where('flight_id', $validatedData['flight_id'])->first();

        return redirect()->route('seats.index')->with('success', 'Seat updated successfully.');
    }

    public function destroy($id)
    {
        $seat = \App\Models\seats::findOrFail($id);
        $seat->delete();

        return redirect()->route('seats.index')->with('success', 'Seat deleted successfully.');
    }

}
