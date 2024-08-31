@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Ticket</h5>

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

                <!-- Edit Ticket Form -->
                <form action="{{ route('tickets.update', $ticket->ticket_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Passenger ID -->
                    <div class="mb-3">
                        <label for="passenger_id" class="form-label">Passenger ID</label>
                        <select class="form-control" id="passenger_id" name="passenger_id" required>
                            @foreach($passengers as $passenger)
                                <option value="{{ $passenger->passenger_id }}" {{ $passenger->id == $ticket->passenger_id ? 'selected' : '' }}>
                                    {{ $passenger->first_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Seat ID -->
                    <div class="mb-3">
                        <label for="seat_id" class="form-label">Seat ID</label>
                        <select class="form-control" id="seat_id" name="seat_id" required>
                            @foreach($seats as $seat)
                                <option value="{{ $seat->seat_id }}" {{ $seat->seat_id == $ticket->seat_id ? 'selected' : '' }}>
                                    {{ $seat->seat_number }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price', $ticket->price) }}" required>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Pending" {{ $ticket->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Cancelled" {{ $ticket->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                            <option value="Booked" {{ $ticket->status == 'Booked' ? 'selected' : '' }}>Booked</option>
                        </select>
                    </div>

                    <!-- Booking Date -->
                    <div class="mb-3">
                        <label for="booking_date" class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date', $ticket->booking_date) }}" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update Ticket</button>
                </form>
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
