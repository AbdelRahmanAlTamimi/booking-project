@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">Create Flight</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('flights.store') }}" method="POST">
                    @csrf
                    
                    <!-- From Location -->
                    <div class="mb-3">
                        <label for="from_location" class="form-label">From Location</label>
                        <input type="text" class="form-control" id="from_location" name="from_location" value="{{ old('from_location') }}" required>
                    </div>

                    <!-- To Location -->
                    <div class="mb-3">
                        <label for="to_location" class="form-label">To Location</label>
                        <input type="text" class="form-control" id="to_location" name="to_location" value="{{ old('to_location') }}" required>
                    </div>

                    <!-- Departure DateTime -->
                    <div class="mb-3">
                        <label for="departure_datetime" class="form-label">Departure DateTime</label>
                        <input type="datetime-local" class="form-control" id="departure_datetime" name="departure_datetime" value="{{ old('departure_datetime') }}" required>
                    </div>

                    <!-- Arrival DateTime -->
                    <div class="mb-3">
                        <label for="arrival_datetime" class="form-label">Arrival DateTime</label>
                        <input type="datetime-local" class="form-control" id="arrival_datetime" name="arrival_datetime" value="{{ old('arrival_datetime') }}" required>
                    </div>

                    <!-- Duration -->
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="time" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" required>
                    </div>

                    <!-- Available Seats -->
                    <div class="mb-3">
                        <label for="available_seats" class="form-label">Available Seats</label>
                        <input type="number" class="form-control" id="available_seats" name="available_seats" value="{{ old('available_seats') }}" required min="1">
                    </div>

                    <!-- Plane Selection -->
                    <div class="mb-3">
                        <label for="plane_id" class="form-label">Plane</label>
                        <select class="form-control" id="plane_id" name="plane_id" required>
                            <option value="" disabled selected>Select Plane</option>
                            @foreach($planes as $plane)
                                <option value="{{ $plane->plane_id }}">{{ $plane->model }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Flight</button>
                </form>
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
