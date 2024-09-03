@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Select Your Seat</h2>
    <form action="{{ route('booking.finalize') }}" method="POST">
        @csrf
        <input type="hidden" name="class" value="{{ $class }}">
        <input type="hidden" name="flight_id" value="{{ $flight->id }}">
        <!-- Include other hidden fields to pass booking data -->
        
        <!-- Seat selection logic here -->
        <div class="form-group">
            <label for="seat_number">Seat Number</label>
            <select class="form-select" id="seat_number" name="seat_number" required>
                <!-- Populate with available seats -->
            </select>
        </div>

        <button type="submit" class="btn btn-success">Finalize Booking</button>
    </form>
</div>
@endsection