@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create New Seat</h5>

                <!-- Create Seat Form -->
                <form action="{{ route('seats.store') }}" method="POST">
                    @csrf

                    <!-- Seat Number -->
                    <div class="mb-3">
                        <label for="seat_number" class="form-label">Seat Number</label>
                        <input type="text" class="form-control" id="seat_number" name="seat_number" required>
                    </div>

                    <!-- Seat Class -->
                    <div class="mb-3">
                        <label for="seat_class" class="form-label">Seat Class</label>
                        <select class="form-control" id="seat_class" name="seat_class" required>
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="First">First</option>
                        </select>
                    </div>

                    <!-- Flight -->
                    <div class="mb-3">
                        <label for="flight_id" class="form-label">Flight</label>
                        <select class="form-control" id="flight_id" name="flight_id" required>
                            @foreach($flights as $flight)
                                <option value="{{ $flight->flight_id }}">
                                    {{ $flight->from_location }} &rarr; {{ $flight->to_location }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Seat</button>
                </form>
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
