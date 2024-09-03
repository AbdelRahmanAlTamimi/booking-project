@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Booking Confirmation</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Booking Details</h5>
            <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
            <p><strong>Flight Number:</strong> {{ $booking->flight->flight_number }}</p>
            <p><strong>Passenger Name:</strong> {{$booking->passenger ? $booking->passenger->full_name : 'not found' }}</p>
            <p><strong>Seat Number:</strong> {{ $booking->seat_number }}</p>
            <p><strong>Class:</strong> {{ $booking->class }}</p>
            <!-- Add more details as needed -->
        </div>
    </div>
</div>
@endsection