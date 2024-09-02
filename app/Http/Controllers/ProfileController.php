<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Ticket;

class ProfileController extends Controller
{
    /**
     * Update the user profile.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'current_password' => ['nullable', 'string', 'min:8'],
            'new_password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                throw ValidationException::withMessages([
                    'current_password' => ['The provided password does not match our records.'],
                ]);
            }
        }

        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'];
        $user->email = $validated['email'];

        if ($request->filled('new_password')) {
            $user->password = Hash::make($validated['new_password']);
        }

        $user->save();

        return redirect()->back()->with('status', 'Profile updated successfully.');
    }

    /**
     * Display the user profile including tickets.
     */
    public function show()
    {
        $user = Auth::user();

        $currentTickets = Ticket::where('status', 'booked')
            ->where('booking_date', '>=', now())
            ->orderBy('booking_date')
            ->get();

        $pastTickets = Ticket::where('status', 'booked')
            ->where('booking_date', '<', now())
            ->orderBy('booking_date', 'desc')
            ->get();

        return view('profile', compact('user', 'currentTickets', 'pastTickets'));
    }
}
