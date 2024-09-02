<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\FlightSchedule;

class BookingController extends Controller
{
    public function showBookingForm($flightId, $class)
{
    $flight = Flight::findOrFail($flightId);
    $availableSeats = Seat::where('flight_id', $flightId)
                          ->where('class', $class)
                          ->where('is_available', true)
                          ->pluck('seat_number');
    $flightSchedule = FlightSchedule::find($flightId);
    // dd($availableSeats);
    return view('booking.form', compact('flight', 'class','availableSeats','flightSchedule'));
}

    public function submitBooking(Request $request)
{
    // dd($request->booking_date);
    $validated = $request->validate([
    'title' => 'required|string|in:Mr,Ms,Mrs',
    'first_name' => 'required|string|max:255',
    'last_name' => 'required|string|max:255',
    'dob_day' => 'required|integer|min:1|max:31',
    'dob_month' => 'required|string|in:January,February,March,April,May,June,July,August,September,October,November,December',
    'dob_year' => 'required|integer|min:1900|max:' . date('Y'),
    'nationality' => 'required|string', // Add other valid nationalities if needed
    'document_type' => 'required|string', // Add other valid document types if needed
    'issuing_country' => 'required|string', // Add other valid issuing countries if needed
    'document_number' => 'required|string|max:255',
    'expiry_day' => 'required|integer|min:1|max:31',
    'expiry_month' => 'required|string|in:January,February,March,April,May,June,July,August,September,October,November,December',
    'expiry_year' => 'required|integer|min:' . date('Y') . '|max:' . (date('Y') + 10),
    'seat_number' => 'required|string',
    'class' => 'required|string', 
    'flight_id' => 'required|integer|exists:flights,id', // Assuming flight_id must exist in the flights table
    'flight_schedule_id' => 'required|integer|exists:flight_schedules,id', // Assuming flight_schedule_id must exist in the flight_schedules table
    'booking_date' => 'required'
]);

    
    
  $booking =  Booking::create($validated);

    $request->session()->put('booking_id', $booking->id);

    return to_route('confirmation');
}

public function showConfirmation(Request $request)
    {
    // Retrieve the booking ID from the session or request
    $bookingId = $request->session()->get('booking_id');
        // dd($bookingId);
    // Fetch the booking details from the database
    $booking = Booking::with(['flight', 'passenger'])->findOrFail($bookingId);

    // Pass the booking details to the view
    return view('booking.confirmation', compact('booking'));
    }
}
