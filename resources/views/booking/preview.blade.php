@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Reservation Preview</h2>

        <div class="card mb-4">
            <div class="card-header">
                Flight Details
            </div>
            <div class="card-body">
                <p><strong>Flight ID:</strong> {{ $reservationData['flight_id'] }}</p>
                <p><strong>Class:</strong> {{ $reservationData['class'] }}</p>
                <p><strong>Seat Number:</strong> {{ $reservationData['seat_number'] }}</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                Passenger Details
            </div>
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $reservationData['first_name'] }}</p>
                <p><strong>Last Name:</strong> {{ $reservationData['last_name'] }}</p>
                <p><strong>Document Number:</strong> {{ $reservationData['document_number'] }}</p>
                <!-- Add other details as needed -->
            </div>
        </div>

        <form action="{{ route('booking.confirm') }}" method="post">
            @csrf
            <input type="hidden" name="title" value="{{ $reservationData['title'] }}">
            <input type="hidden" name="first_name" value="{{ $reservationData['first_name'] }}">
            <input type="hidden" name="last_name" value="{{ $reservationData['last_name'] }}">
            <input type="hidden" name="dob_day" value="{{ $reservationData['dob_day'] }}">
            <input type="hidden" name="dob_month" value="{{ $reservationData['dob_month'] }}">
            <input type="hidden" name="dob_year" value="{{ $reservationData['dob_year'] }}">
            <input type="hidden" name="nationality" value="{{ $reservationData['nationality'] }}">
            <input type="hidden" name="document_type" value="{{ $reservationData['document_type'] }}">
            <input type="hidden" name="issuing_country" value="{{ $reservationData['issuing_country'] }}">
            <input type="hidden" name="document_number" value="{{ $reservationData['document_number'] }}">
            <input type="hidden" name="expiry_day" value="{{ $reservationData['expiry_day'] }}">
            <input type="hidden" name="expiry_month" value="{{ $reservationData['expiry_month'] }}">
            <input type="hidden" name="expiry_year" value="{{ $reservationData['expiry_year'] }}">
            <input type="hidden" name="seat_number" value="{{ $reservationData['seat_number'] }}">
            <input type="hidden" name="class" value="{{ $reservationData['class'] }}">
            <input type="hidden" name="flight_id" value="{{ $reservationData['flight_id'] }}">
            <input type="hidden" name="flight_schedule_id" value="{{ $reservationData['flight_schedule_id'] }}">
            <input type="hidden" name="booking_date" value="{{ $reservationData['booking_date'] }}">

            <button type="submit" class="btn btn-primary">Confirm Reservation</button>
        </form>
    </div>
@endsection

<!-- resources/views/booking/summary.blade.php -->
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <h1>Reservation Summary</h1>--}}
{{--        <ul>--}}
{{--            <li>Flight: {{ $reservationData['flight_id'] }}</li>--}}
{{--            <li>Class: {{ $reservationData['class'] }}</li>--}}
{{--            <li>Name: {{ $reservationData['title'] }} {{ $reservationData['first_name'] }} {{ $reservationData['last_name'] }}</li>--}}
{{--            <!-- Add other details as needed -->--}}
{{--        </ul>--}}
{{--        <form action="{{ route('booking.confirm') }}" method="POST">--}}
{{--            @csrf--}}
{{--            @foreach($reservationData as $key => $value)--}}
{{--                <input type="hidden" name="{{ $key }}" value="{{ $value }}">--}}
{{--            @endforeach--}}
{{--            <button type="submit" class="btn btn-success">Confirm Reservation</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}
