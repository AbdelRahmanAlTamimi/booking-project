@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Search Results</h2>
    @if($outboundFlights->isEmpty() && $returnFlights->isEmpty())
        <div class="alert alert-warning" role="alert">
            No flights found for the selected criteria.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Flight Number</th>
                        <th>Departure Airport</th>
                        <th>Arrival Airport</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($outboundFlights as $flight)
                        <tr>
                            <td>{{ $flight->flight_number }}</td>
                            <td>{{ $flight->departureAirport->name }}</td>
                            <td>{{ $flight->arrivalAirport->name }}</td>
                            <td>{{ $flight->schedules->first()->departure_time }}</td>
                            <td>{{ $flight->schedules->first()->arrival_time }}</td>
                            <td>
                                <button class="btn btn-primary show-prices" data-flight-id="{{ $flight->id }}">
                                    Show Prices
                                </button>
                            </td>
                        </tr>
                        <tr class="price-row" id="price-row-{{ $flight->id }}" style="display: none;">
                            <td colspan="6">
                                <hr>
                                <div class="card-deck d-flex flex-row justify-content-center">
                                    <div class="card text-center class-select" data-class="economy" data-flight-id="{{ $flight->id }}">
                                        <div class="card-body">
                                            <h5 class="card-title">Economy</h5>
                                            <p class="card-text">${{ number_format($flight->economy_price, 2) }}</p>
                                        </div>
                                    </div>
                                    <div class="card text-center class-select" data-class="business" data-flight-id="{{ $flight->id }}">
                                        <div class="card-body">
                                            <h5 class="card-title">Business</h5>
                                            <p class="card-text">${{ number_format($flight->business_price, 2) }}</p>
                                        </div>
                                    </div>
                                    <div class="card text-center class-select" data-class="first" data-flight-id="{{ $flight->id }}">
                                        <div class="card-body">
                                            <h5 class="card-title">First Class</h5>
                                            <p class="card-text">${{ number_format($flight->first_class_price, 2) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="booking-button-container" class="text-center mt-4" style="display: none;">
            <button id="booking-button" class="btn btn-success">Proceed to Booking</button>
        </div>
    @endif
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.show-prices');
    const classCards = document.querySelectorAll('.class-select');
    const bookingButtonContainer = document.getElementById('booking-button-container');
    const bookingButton = document.getElementById('booking-button');
    let selectedClass = null;
    let selectedFlightId = null;

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const flightId = this.getAttribute('data-flight-id');
            const priceRow = document.getElementById(`price-row-${flightId}`);
            priceRow.style.display = priceRow.style.display === 'none' ? 'table-row' : 'none';
        });
    });

    classCards.forEach(card => {
        card.addEventListener('click', function () {
            classCards.forEach(c => c.classList.remove('border-primary'));
            this.classList.add('border-primary');
            selectedClass = this.getAttribute('data-class');
            selectedFlightId = this.getAttribute('data-flight-id');
            bookingButtonContainer.style.display = 'block';
        });
    });

    bookingButton.addEventListener('click', function () {
        if (selectedClass && selectedFlightId) {
            window.location.href = `/booking/${selectedFlightId}/${selectedClass}`;
        }
    });
});
</script>
@endsection