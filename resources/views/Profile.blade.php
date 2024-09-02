<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingDung | Profile Template</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#current-trips">Current trips</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#trips-history">History</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- General Tab -->
                        <div class="tab-pane fade show active" id="account-general">
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control mb-1" name="first_name"
                                            value="{{ $user->first_name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                            value="{{ $user->last_name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control mb-1" name="email"
                                            value="{{ $user->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" name="new_password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button><br><br>

                                    @if (session('status'))
                                        <div id="success-message" class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div id="error-message" class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <!-- Current trips -->
                        <div class="tab-pane fade" id="current-trips">
                            <div class="card-body pb-2">
                                <h5 class="mb-3">Upcoming Trips</h5>
                                <div class="form-group">
                                    <ul class="list-group">
                                        @forelse ($currentTickets as $ticket)
                                            <li class="list-group-item">
                                                Trip booked for {{ $ticket->booking_date->format('d/m/Y') }} - Status:
                                                {{ ucfirst($ticket->status) }} - Price:
                                                ${{ number_format($ticket->price, 2) }}
                                            </li>
                                        @empty
                                            <li class="list-group-item">No upcoming trips.</li>
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
                                        @forelse ($pastTickets as $ticket)
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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
