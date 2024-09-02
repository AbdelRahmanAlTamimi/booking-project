@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card recent-sales overflow-auto shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">All Flights</h5>
            </div>

            <div class="card-body">
                <!-- Flights Filter Form -->
                <form method="GET" action="{{ route('flights.index') }}" class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Entries per Page Selection -->
                    <div>
                        <label class="form-label me-2 mb-0">Entries per page:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="per-page" onchange="this.form.submit()">
                            <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="{{ $flights->total() }}" {{ request('per-page') == $flights->total() ? 'selected' : '' }}>All</option>
                        </select>
                    </div>

                    <!-- Search Input -->
                    <div class="input-group w-50">
                        <input class="form-control form-control-sm" type="search" name="search" value="{{ request('search') }}" placeholder="Search..." aria-label="Search">
                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                    </div>
                </form>

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Flights Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>From </th>
                                <th>To </th>
                                <th>Departure DateTime</th>
                                <th>Arrival DateTime</th>
                                <th>Duration</th>
                                <th>Available Seats</th>
                                <th>Plane Model</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flights as $flight)
                                <tr>
                                    <td>{{ $flight->flight_id }}</td>
                                    <td>{{ $flight->from_location ?? 'Not found' }}</td>
                                    <td>{{ $flight->to_location ?? 'Not found' }}</td>
                                    <td>{{ $flight->departure_datetime ?? 'Not found' }}</td>
                                    <td>{{ $flight->arrival_datetime ?? 'Not found' }}</td>
                                    <td>{{ $flight->duration ?? 'Not found' }}</td>
                                    <td>{{ $flight->available_seats ?? 'Not found' }}</td>
                                    <td>{{ $flight->plane_id ? $flight->plane->model : 'Not found' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <!-- Edit Button -->
                                            <a href="{{ route('flights.edit', $flight->flight_id) }}" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-warning btn-sm me-2">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>

                                            <!-- Delete Button -->
                                            <form id="delete-form-{{ $flight->flight_id }}" action="{{ route('flights.destroy', $flight->flight_id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" type="button" onclick="confirmDelete({{ $flight->flight_id }})" class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $flights->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Delete Confirmation Script -->
<script>
    function confirmDelete(flightId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + flightId).submit();
            }
        });
    }
</script>
{{-- @endsection --}}
