@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                    <div class="datatable-top">
                        <div class="datatable-dropdown">
                            <label>
                                <select class="datatable-selector" name="per-page">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="-1">All</option>
                                </select> entries per page
                            </label>
                        </div>
                        <div class="datatable-search">
                            <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
                        </div>
                    </div>
                    <div class="datatable-container">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table table-borderless datatable datatable-table">
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
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('tickets.edit', $ticket->ticket_id) }}" class="btn btn-warning me-2">Edit</a>
                                                <form action="{{ route('tickets.destroy', $ticket->ticket_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- @endsection
 --}}
