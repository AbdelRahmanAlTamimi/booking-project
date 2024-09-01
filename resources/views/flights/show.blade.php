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
                            <td>${{ number_format($flight->base_price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(!$returnFlights->isEmpty())
            <h3 class="mt-5">Return Flights</h3>
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
                        @foreach($returnFlights as $flight)
                            <tr>
                                <td>{{ $flight->flight_number }}</td>
                                <td>{{ $flight->departureAirport->name }}</td>
                                <td>{{ $flight->arrivalAirport->name }}</td>
                                <td>{{ $flight->schedules->first()->departure_time }}</td>
                                <td>{{ $flight->schedules->first()->arrival_time }}</td>
                                <td>${{ number_format($flight->base_price, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif
</div>
@endsection