@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card recent-sales overflow-auto shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">Recent Sales <span class="text-muted small">| Today</span></h5>

            </div>

            <div class="card-body">
                <form method="GET" action="{{ route('tickets.index') }}" class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <label class="form-label me-2 mb-0">Entries per page:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="per-page" onchange="this.form.submit()">
                            <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="900" {{ request('per-page') == 900 ? 'selected' : '' }}>All</option>
                        </select>
                    </div>
                    <div class="input-group w-50">
                        <input class="form-control form-control-sm" type="search" name="search" value="{{ request('search') }}" placeholder="Search..." aria-label="Search">
                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                    </div>
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Passenger ID</th>
                                <th>Seat ID</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Booking Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->ticket_id }}</td>
                                    <td>{{ $ticket->passenger->passenger_id ?? 'Not found' }}</td>
                                    <td>{{ $ticket->seat->seat_id ?? 'Not found' }}</td>
                                    <td>{{ $ticket->price }}</td>
                                    <td>{{ $ticket->status }}</td>
                                    <td>{{ $ticket->booking_date }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('tickets.edit', $ticket->ticket_id) }}" style="width: fit-content;height: fit-content;" class="btn btn-warning btn-sm me-2">Edit</a>
                                            <form action="{{ route('tickets.destroy', $ticket->ticket_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="width: fit-content;height: fit-content;" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $tickets->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
                
                
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
