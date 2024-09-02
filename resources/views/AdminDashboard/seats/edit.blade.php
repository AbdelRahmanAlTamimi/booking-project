@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Seat</h5>

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

                <!-- Edit Seat Form -->
                <form action="{{ route('seats.update', $seat->seat_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Flight ID -->
                    <div class="mb-3">
                        <label for="flight_id" class="form-label">Flight ID</label>
                        <select class="form-control" id="flight_id" name="flight_id" required>
                            @foreach($flights as $flight)
                                <option value="{{ $flight->flight_id }}" {{ $flight->flight_id == $seat->flight_id ? 'selected' : '' }}>
                                    {{ $flight->from_location }} &rarr; {{ $flight->to_location }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Seat Number -->
                    <div class="mb-3">
                        <label for="seat_number" class="form-label">Seat Number</label>
                        <input type="text" class="form-control" id="seat_number" name="seat_number" value="{{ old('seat_number', $seat->seat_number) }}" required>
                    </div>
                    
                    <!-- Seat Class -->
                    <div class="mb-3">
                        <label for="seat_class" class="form-label">Seat Class</label>
                        <select class="form-control" id="seat_class" name="seat_class" required>
                            <option value="Economy" {{ $seat->seat_class == 'Economy' ? 'selected' : '' }}>Economy</option>
                            <option value="Business" {{ $seat->seat_class == 'Business' ? 'selected' : '' }}>Business</option>
                            <option value="First" {{ $seat->seat_class == 'First' ? 'selected' : '' }}>First</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update Seat</button>
                </form>

            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
