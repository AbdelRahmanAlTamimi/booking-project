<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Models\Planes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Flightscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalFlights = Flights::count();
        $searchQuery = $request->input('search');

        $perPage = min($request->get('per-page', 5), $maxPerPage);

        $query = Flights::query();
        if ($searchQuery) {
            $query->where('flight_id', 'like', '%' . $searchQuery . '%')
                ->orWhere('from_location', 'like', '%' . $searchQuery . '%')
                ->orWhere('to_location', 'like', '%' . $searchQuery . '%')
                ->orWhere('departure_datetime', 'like', '%' . $searchQuery . '%')
                ->orWhere('arrival_datetime', 'like', '%' . $searchQuery . '%')
                ->orWhere('duration', 'like', '%' . $searchQuery . '%')
                ->orWhere('plane_id', 'like', '%' . $searchQuery . '%')
                ->orWhere('available_seats', 'like', '%' . $searchQuery . '%');
        }

        $flights = $query->paginate($perPage);

        return view('AdminDashboard.flights.index', compact('flights', 'totalFlights', 'searchQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $planes = Planes::all(); 
        
        return view('AdminDashboard.flights.create', compact('planes'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    // Validate request data
    $validatedData = $request->validate([
        'from_location' => 'required|string|max:255',
        'to_location' => 'required|string|max:255',
        'departure_datetime' => 'required|date_format:Y-m-d\TH:i',
        'arrival_datetime' => 'required|date_format:Y-m-d\TH:i|after:departure_datetime',
        'duration' => 'required|date_format:H:i',
        'available_seats' => 'required|integer|min:1',
        'plane_id' => 'required|exists:planes,plane_id',
    ]);

    // Convert date and time formats from 'Y-m-d\TH:i' to 'Y-m-d H:i:s'
    $departureDatetime = Carbon::createFromFormat('Y-m-d\TH:i', $validatedData['departure_datetime'])->format('Y-m-d H:i:s');
    $arrivalDatetime = Carbon::createFromFormat('Y-m-d\TH:i', $validatedData['arrival_datetime'])->format('Y-m-d H:i:s');

    // Create a new Flight instance
    $flight = new Flights();
    
    // Set attributes
    $flight->from_location = $validatedData['from_location'];
    $flight->to_location = $validatedData['to_location'];
    $flight->departure_datetime = $departureDatetime;
    $flight->arrival_datetime = $arrivalDatetime;
    $flight->duration = $validatedData['duration'];
    $flight->available_seats = $validatedData['available_seats'];
    $flight->plane_id = $validatedData['plane_id'];
    
    // Save the flight
    $flight->save();

    // Redirect with a success message
    return redirect()->route('flights.index')->with('success', 'Flight created successfully');
}
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the flight by its ID
        $flight = Flights::where('flight_id', $id)->firstOrFail();

        // Check if the flight was found
        if (!$flight) {
            return redirect()->route('flights.index')->with('error', 'Flight not found.');
        }

        // Retrieve distinct locations from the flights table
        $locations = Flights::select('from_location')
            ->distinct()
            ->pluck('from_location', 'from_location')
            ->toArray();

        $toLocations = Flights::select('to_location')
            ->distinct()
            ->pluck('to_location', 'to_location')
            ->toArray();

        // Retrieve all planes
        $planes = Planes::all();

        return view('AdminDashboard.flights.edit', compact('flight', 'planes', 'locations', 'toLocations'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
        // dd($request->all());

         $validatedData = $request->validate([
             'from_location' => 'required|string|max:255',
             'to_location' => 'required|string|max:255',
             'departure_datetime' => 'required|date_format:Y-m-d\TH:i',
             'arrival_datetime' => 'required|date_format:Y-m-d\TH:i|after:departure_datetime',
             'duration' => 'required|date_format:H:i',
             'available_seats' => 'required|integer|min:1',
             'plane_id' => 'required|exists:planes,plane_id',
         ]);
     
         $flight = Flights::findOrFail($id);
         $flight->from_location = $validatedData['from_location'];
         $flight->to_location = $validatedData['to_location'];
         $flight->departure_datetime = $validatedData['departure_datetime'];
         $flight->arrival_datetime = $validatedData['arrival_datetime'];
         $flight->duration = $validatedData['duration'];
         $flight->available_seats = $validatedData['available_seats'];
         $flight->plane_id = $validatedData['plane_id'];
     
         $flight->save();
     
         return redirect()->route('flights.index')->with('success', 'Flight updated successfully.');
     }
     
     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find and delete the flight by its flight_id
        $deleted = Flights::where('flight_id', $id)->delete();

        if ($deleted) {
            // Redirect with success message
            return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
        } else {
            // Redirect with error message if the flight was not found
            return redirect()->route('flights.index')->with('error', 'Flight not found.');
        }
    }

}
