<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function edit(Request $request) {

        $bookings = Booking::all();

        return view('profile.edit', [
            'user' => $request->user(),
            'bookings' => $bookings
        ]);
    }

    public function update(Request $request) {
        $user = auth()->user();

    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'current_password' => ['required', 'string'],
        'new_password' => ['nullable', 'string', 'min:8', 'confirmed'],
    ]);

    if (!Hash::check($validated['current_password'], $user->password)) {
        return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
    }

    $user->name = $validated['name'];
    $user->email = $validated['email'];

    if (isset($validated['new_password'])) {
        $user->password = Hash::make($validated['new_password']);
    }

    $user->save();

    return redirect()->route('profile.edit')->with('status', 'Profile updated successfully!');
    }

    public function history() {
        $bookings = Booking::where('booking_date', '<', now()->toDateString())->get();
// dd($bookings);
        return view('profile.history',compact('bookings'));
    }

    public function currentBookings() {
        $bookings = Booking::where('booking_date', '>=', now()->toDateString())->get();

        return view('profile.currentBookings',compact('bookings'));
    }

}
