@extends('layouts.main')

@section('content')
<div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="{{route('profile.edit')}}">General</a>
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="{{route('profile.currentBookings')}}">Current trips</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="{{route('profile.history')}}">History</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        

                        <!-- Current trips -->
                        <div class="" id="current-trips">
                            <div class="card-body pb-2">
                                <h5 class="mb-3">Upcoming Trips</h5>
                                <div class="form-group">
                                    <ul class="list-group">
                                        {{-- @dd($bookings) --}}
                                        @forelse ($bookings as $ticket)
                                            <li class="list-group-item">
                                                Trip booked for 
                                                @if ($ticket->booking_date instanceof \Carbon\Carbon)
                                                    {{ $ticket->booking_date->format('d/m/Y') }}
                                                @else
                                                    {{ \Carbon\Carbon::parse($ticket->booking_date)->format('d/m/Y') }}
                                                @endif
                                                - Status: {{ ucfirst($ticket->status) }} - Price: ${{ number_format($ticket->price, 2) }}
                                            </li>
                                        @empty
                                            <li class="list-group-item">No bookings found.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
       
@endsection
