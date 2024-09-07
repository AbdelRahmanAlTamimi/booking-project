
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Reservation Successful</h1>
        <p>Your reservation has been completed successfully. Thank you for booking with us!</p>
        <a href="{{ route('index') }}" class="btn btn-primary">Book Another Flight</a>
    </div>
@endsection
