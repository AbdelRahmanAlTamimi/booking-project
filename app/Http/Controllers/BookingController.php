<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\Passenger;
use App\Models\FlightSchedule;
use  Carbon\Carbon;
use Illuminate\Support\Facades\Log;

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
    // dd($request->dob_day);

     try {
         $monthNumber = Carbon::parse($validated['dob_month'])->month;
        $date_of_birth = Carbon::createFromDate($validated['dob_year'], $monthNumber, $validated['dob_day'])->format('Y-m-d');

        $passengerInfo = [
            "date_of_birth" => $date_of_birth,
            "passport_number" => $validated['document_number'],
            "full_name" => $validated['title']." ".$validated['first_name']." ".$validated['last_name']
        ];

        $passenger = Passenger::create($passengerInfo);
        
        $booking = Booking::create(array_merge($validated, ["passenger_id" => $passenger->id]));

        $request->session()->put('booking_id', $booking->id);

        return to_route('confirmation');
    } catch (Exception $e) {
        Log::error('Booking submission failed: ' . $e->getMessage());
        return back()->withInput()->withErrors(['error' => 'Unable to process booking. Please try again. Error: ' . $e->getMessage()]);
    }
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

     public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalTickets = \App\Models\Booking::count();

        $searchQuery = $request->input('search');
        $statusFilter = $request->input('status'); 
        $perPage = min($request->get('per-page', 5), $maxPerPage);

        $query = \App\Models\Booking::with(['passenger', 'seat']);
        if ($statusFilter) {
            $query->where('status', $statusFilter);
        }

        if ($searchQuery) {
            $query->where('ticket_id', 'like', '%' . $searchQuery . '%')
                ->orWhereHas('passenger', function ($q) use ($searchQuery) {
                    $q->where('passenger_id', 'like', '%' . $searchQuery . '%');
                })
                ->orWhereHas('seat', function ($q) use ($searchQuery) {
                    $q->where('seat_id', 'like', '%' . $searchQuery . '%');
                })
                ->orWhere('price', 'like', '%' . $searchQuery . '%')
                ->orWhere('status', 'like', '%' . $searchQuery . '%')
                ->orWhere('booking_date', 'like', '%' . $searchQuery . '%');
        }

        $tickets = $query->paginate($perPage);

        return view('AdminDashboard.bookings.index', compact('tickets', 'totalTickets', 'searchQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket = Booking::all();

        return view('AdminDashboard.bookings.create', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'passenger_id' => 'required|exists:passengers,passenger_id',
            'seat_id' => 'required|exists:seats,seat_id',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Pending,Cancelled,Booked',
            'booking_date' => 'required|date',
        ]);

        $ticket = new Booking();
        $ticket->passenger_id = $request->input('passenger_id');
        $ticket->seat_id = $request->input('seat_id');
        $ticket->price = $request->input('price');
        $ticket->status = $request->input('status');
        $ticket->booking_date = $request->input('booking_date');
        $ticket->save();

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
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
    public function edit(string $id)
    {
        $ticket = Booking::where('ticket_id', $id)->first();
        if (!$ticket) {
            return view('tickets.index')->with('error', 'Ticket not found.');
        }

        $passengers = Passengers::all();
        $seats = Seats::all();

        return view('AdminDashboard.tickets.edit', compact('ticket', 'passengers', 'seats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'passenger_id' => 'required|exists:passengers,passenger_id', // Ensure this references the correct table and column
            'seat_id' => 'required|exists:seats,seat_id', // Ensure this references the correct table and column
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Pending,Cancelled,Booked',
            'booking_date' => 'required|date',
        ]);

        $ticket = Booking::find($id);

        if (!$ticket) {
            return redirect()->route('tickets.index')->with('error', 'Ticket not found.');
        }

        $ticket->passenger_id = $request->input('passenger_id');
        $ticket->seat_id = $request->input('seat_id');
        $ticket->price = $request->input('price');
        $ticket->status = $request->input('status');
        $ticket->booking_date = $request->input('booking_date');

        $ticket->save();

        $tickets = Booking::with(['passenger', 'seat'])->paginate(10);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Booking::where('ticket_id', $id)->first();

        if (!$ticket) {
            return redirect()->route('tickets.index')->with('error', 'Ticket not found.');
        }

        if ($ticket->delete()) {
            return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
        }

    }
}
