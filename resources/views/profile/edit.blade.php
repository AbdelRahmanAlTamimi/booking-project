@extends('layouts.main')

@section('content')
@if (session('status')) 
    <div id="status-alert" class="alert alert-success">
        {{session('status')}}
    </div>
    
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


     <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="{{route('profile.edit')}}">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="{{route('profile.currentBookings')}}">Current trips</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="{{route('profile.history')}}">History</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- edit form S t a r t -->
                            <section class="contact-area section-padding2">
                                <div class="position-relative contact-bg-before">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-7 col-lg-9">
                                                <div class="contact-card">
                                                    <h4 class="contact-heading">Feel Free to Write us Anytime</h4>
                                                    <form method="post" action="{{ route('profile.update') }}" class="user-update-form">
                                                            @csrf 
                                                            @method('put')
                                                            <div class="row g-4">
                                                                <div class="col-sm-6">
                                                                    <input class="custom-form" type="text" name="name" placeholder="Your Name" value="{{ old('name', $user->name) }}" required>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input class="custom-form" type="email" name="email" placeholder="Your Email" value="{{ old('email', $user->email) }}" required>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input class="custom-form" type="password" name="current_password" placeholder="Current Password" required>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input class="custom-form" type="password" name="new_password" placeholder="New Password">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input class="custom-form" type="password" name="new_password_confirmation" placeholder="Confirm New Password">
                                                                </div>
                                                            </div>
                                                            <div class="mt-40">
                                                                <button type="submit" class="update-btn">Update Profile</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                         <!--/ End-of edit form-->

                        <!-- Current trips -->
                        <div class="tab-pane fade" id="current-trips">
                            <div class="card-body pb-2">
                                <h5 class="mb-3">Upcoming Trips</h5>
                                <div class="form-group">
                                    <ul class="list-group">
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

                        <!-- History Tab -->
                        <div class="tab-pane fade" id="trips-history">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">History</h6>
                                <div class="form-group">
                                    <ul class="list-group">
                                        @forelse ($bookings as $ticket)
                                            <li class="list-group-item">
                                                Trip to {{ $ticket->booking_date->format('d/m/Y') }} - Status:
                                                {{ ucfirst($ticket->status) }} - Price:
                                                ${{ number_format($ticket->price, 2) }}
                                            </li>
                                        @empty
                                            <li class="list-group-item">No past trips.</li>
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

@section('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var statusAlert = document.getElementById('status-alert');
        if (statusAlert) {
            setTimeout(function() {
                statusAlert.style.transition = 'opacity 1s';
                statusAlert.style.opacity = '0';
                setTimeout(function() {
                    statusAlert.remove();
                }, 1000);
            }, 3000);
        }
    });
</script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            function hideMessage(id, delay) {
                const message = document.getElementById(id);
                if (message) {
                    setTimeout(() => {
                        message.classList.add('hidden');
                    }, delay);
                }
            }

            hideMessage('success-message', 3000);
            hideMessage('error-message', 3000);
        });
    </script>
@endsection


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}




    

    

    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script> --}}


