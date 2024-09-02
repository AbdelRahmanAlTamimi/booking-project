<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|in:booked,cancelled,pending',
            'price' => 'nullable|numeric',
            'booking_date' => 'nullable|date',
        ]);

        Ticket::create($validated);
        return redirect()->route('tickets.index')->with('status', 'Ticket created successfully!');
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'status' => 'required|in:booked,cancelled,pending',
            'price' => 'nullable|numeric',
            'booking_date' => 'nullable|date',
        ]);

        $ticket->update($validated);
        return redirect()->route('tickets.index')->with('status', 'Ticket updated successfully!');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('status', 'Ticket deleted successfully!');
    }
}
