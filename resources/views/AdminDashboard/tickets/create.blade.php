@extends('AdminDashboard.index')
{{-- @extends('AdminDashboard.layouts.header')
@extends('AdminDashboard.layouts.sidebar')
@extends('AdminDashboard.layouts.footer')
@extends('AdminDashboard.layouts.script') --}}

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main id="main" class="main">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Ticket</h5>
    
                    <!-- Create Ticket Form -->
                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf
    
                        <!-- Passenger ID -->
                        <div class="mb-3">
                            <label for="passenger_id" class="form-label">Passenger ID</label>
                            <select class="form-control" id="status" name="passenger_id" required>
                                @foreach($ticket as $tickets)
                                <option value="{{ $tickets->passenger_id }}">{{ $tickets->passenger->first_name }}</option>
                            @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="passenger_id" name="passenger_id" required> --}}
                        </div>
    
                        <!-- Seat ID -->
                        <div class="mb-3">
                            <label for="seat_id" class="form-label">Seat ID</label>
                            <select class="form-control" id="status" name="seat_id" required>
                            @foreach($ticket as $tickets)
    
                            <option value="{{ $tickets->seat_id }}">{{ $tickets->seat->seat_number }}</option>
                        @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="seat_id" name="seat_id" required> --}}
                        </div>
    
                        <!-- Price -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
    
                        <!-- Status -->
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Pending">Pending</option>
                            <option value="Cancelled">Cancelled</option>
                            <option value="Booked">Booked</option>
                        </select>
    
                        <!-- Booking Date -->
                        <div class="mb-3">
                            <label for="booking_date" class="form-label">Booking Date</label>
                            <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                        </div>
    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Create Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>


{{-- @endsection --}}
