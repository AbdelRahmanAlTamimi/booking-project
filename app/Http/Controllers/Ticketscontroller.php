<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Passengers;
use App\Models\seats;
use App\Models\Tickets;
use Illuminate\Http\Request;

class Ticketscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalTickets = \App\Models\Tickets::count();

        $searchQuery = $request->input('search');
        $statusFilter = $request->input('status'); 
        $perPage = min($request->get('per-page', 5), $maxPerPage);

        $query = \App\Models\Tickets::with(['passenger', 'seat']);
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

        return view('AdminDashboard.tickets.index', compact('tickets', 'totalTickets', 'searchQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket = Tickets::all();

        return view('AdminDashboard.tickets.create', compact('ticket'));
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

        $ticket = new Tickets();
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
        $ticket = Tickets::where('ticket_id', $id)->first();
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

        $ticket = Tickets::find($id);

        if (!$ticket) {
            return redirect()->route('tickets.index')->with('error', 'Ticket not found.');
        }

        $ticket->passenger_id = $request->input('passenger_id');
        $ticket->seat_id = $request->input('seat_id');
        $ticket->price = $request->input('price');
        $ticket->status = $request->input('status');
        $ticket->booking_date = $request->input('booking_date');

        $ticket->save();

        $tickets = Tickets::with(['passenger', 'seat'])->paginate(10);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Tickets::where('ticket_id', $id)->first();

        if (!$ticket) {
            return redirect()->route('tickets.index')->with('error', 'Ticket not found.');
        }

        if ($ticket->delete()) {
            return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
        }

    }

}
