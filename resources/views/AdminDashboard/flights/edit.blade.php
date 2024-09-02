@extends('AdminDashboard.index')

@section('content')
    <main id="main" class="main">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Flight</h5>

                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Edit Flight Form -->
                    <form action="{{ route('flights.update', $flight->flight_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- From Location -->
                        <div class="mb-3">
                            <label for="from_location" class="form-label">From Location</label>
                            <select class="form-control" id="from_location" name="from_location" required>
                                <option value="" disabled>Select From Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location }}"
                                        {{ $location == $flight->from_location ? 'selected' : '' }}>
                                        {{ $location }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- To Location -->
                        <div class="mb-3">
                            <label for="to_location" class="form-label">To Location</label>
                            <select class="form-control" id="to_location" name="to_location" required>
                                <option value="" disabled>Select To Location</option>
                                @foreach ($toLocations as $toLocation)
                                    <option value="{{ $toLocation }}"
                                        {{ $toLocation == $flight->to_location ? 'selected' : '' }}>
                                        {{ $toLocation }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Departure DateTime -->
                        <!-- Departure DateTime -->
                        <div class="mb-3">
                            <label for="departure_datetime" class="form-label">Departure DateTime</label>
                            <input type="datetime-local" class="form-control" id="departure_datetime"
                                name="departure_datetime"
                                value="{{ old('departure_datetime', $flight->departure_datetime ? \Carbon\Carbon::parse($flight->departure_datetime)->format('Y-m-d\TH:i') : '') }}"
                                required>
                        </div>


                        <!-- Arrival DateTime -->
                        <!-- Arrival DateTime -->
                        <div class="mb-3">
                            <label for="arrival_datetime" class="form-label">Arrival Datetime</label>
                            <input type="datetime-local" class="form-control" id="arrival_datetime" name="arrival_datetime"
                                value="{{ old('arrival_datetime', $flight->arrival_datetime ? \Carbon\Carbon::parse($flight->arrival_datetime)->format('Y-m-d\TH:i') : '') }}"
                                required>
                        </div>


                        <!-- Duration -->
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="time" class="form-control" id="duration" name="duration"
                                value="{{ old('duration', $flight->duration ? date('H:i', strtotime($flight->duration)) : '') }}"
                                required>
                        </div>

                        <!-- Available Seats -->
                        <div class="mb-3">
                            <label for="available_seats" class="form-label">Available Seats</label>
                            <input type="number" class="form-control" id="available_seats" name="available_seats"
                                value="{{ old('available_seats', $flight->available_seats) }}" required>
                        </div>

                        <!-- Plane Selection -->
                        <div class="mb-3">
                            <label for="plane_id" class="form-label">Plane</label>
                            <select class="form-control" id="plane_id" name="plane_id" required>
                                @foreach ($planes as $plane)
                                    <option value="{{ $plane->plane_id }}"
                                        {{ $plane->plane_id == $flight->plane_id ? 'selected' : '' }}>
                                        {{ $plane->model }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update Flight</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    {{-- @endsection --}}
