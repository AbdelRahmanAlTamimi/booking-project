<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class SeatController extends Controller
{
    public function show(Request $request)
    {
        $flight = Flight::findOrFail($request->flight_id);
        $class = $request->class;
        // Retrieve available seats for the flight
        return view('seat.selection',compact('class','flight'));
    }

    public function submitBooking(Request $request)
    {
        // Validate and store booking data
        $validated = $request->validate([
            'title' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'dob_day' => 'required|integer',
            'dob_month' => 'required|string',
            'dob_year' => 'required|integer',
            'nationality' => 'required|string',
            'document_type' => 'required|string',
            'issuing_country' => 'required|string',
            'document_number' => 'required|string',
            'expiry_day' => 'required|integer',
            'expiry_month' => 'required|string',
            'expiry_year' => 'required|integer',
            'seat_number' => 'required|string',
            // Add other fields as needed
        ]);

        // Store booking details in the database
        // Booking::create($validated);

        return redirect()->route('confirmation');
    }
}