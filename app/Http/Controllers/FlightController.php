<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index() {
        $airports = Airport::all();

        return view('flights.index',compact('airports'));
    }

    public function search(Request $request)
{
    // Validate the request data
    $request->validate([
        'departure_airport' => 'required|exists:airports,id',
        'arrival_airport' => 'required|exists:airports,id',
        'departure_date' => 'required|date',
        'return_date' => 'nullable|date|after_or_equal:departure_date',
        'trip_type' => 'required|in:one_way,round_trip',
    ]);

    // Query for outbound flights
    $outboundFlights = Flight::where('departure_airport_id', $request->departure_airport)
        ->where('arrival_airport_id', $request->arrival_airport)
        ->whereHas('schedules', function ($query) use ($request) {
            $query->where('day_of_week', date('l', strtotime($request->departure_date)))
                  ->where('effective_from', '<=', $request->departure_date)
                  ->where(function ($query) use ($request) {
                      $query->whereNull('effective_to')
                            ->orWhere('effective_to', '>=', $request->departure_date);
                  });
        })
        ->with(['departureAirport', 'arrivalAirport', 'schedules'])
        ->get();

    // Initialize return flights as an empty collection
    $returnFlights = collect();

    // If round-trip, query for return flights
    if ($request->trip_type === 'round_trip' && $request->return_date) {
        $returnFlights = Flight::where('departure_airport_id', $request->arrival_airport)
            ->where('arrival_airport_id', $request->departure_airport)
            ->whereHas('schedules', function ($query) use ($request) {
                $query->where('day_of_week', date('l', strtotime($request->return_date)))
                      ->where('effective_from', '<=', $request->return_date)
                      ->where(function ($query) use ($request) {
                          $query->whereNull('effective_to')
                                ->orWhere('effective_to', '>=', $request->return_date);
                      });
            })
            ->with(['departureAirport', 'arrivalAirport', 'schedules'])
            ->get();
    }

    // Return a view with the search results
    return view('flights.show', compact('outboundFlights', 'returnFlights'));
}

    

}
