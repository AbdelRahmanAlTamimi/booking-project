@extends('AdminDashboard.index')

@section('content')
{{-- <main id="main" class="main"> --}}
    <div class="col-12">
        <div class="card recent-sales overflow-auto shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">All Seats</h5>
            </div>

            <div class="card-body">
                <!-- Update the action attribute to point to the seats.index route -->
                <form method="GET" action="{{ route('seats.index') }}" class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <label class="form-label me-2 mb-0">Entries per page:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="per-page" onchange="this.form.submit()">
                            <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="{{ $totalSeats }}" {{ request('per-page') == $totalSeats ? 'selected' : '' }}>All</option>
                        </select>
                    </div>
                    <div class="ms-3">
                        <label class="form-label me-2 mb-0">seat class:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="seat_class"
                            onchange="this.form.submit()">
                            <option value="" {{ request('seat_class') === '' ? 'selected' : '' }}>All</option>
                            <option value="Business" {{ request('seat_class') === 'Business' ? 'selected' : '' }}>Business
                            </option>
                            <option value="First" {{ request('seat_class') === 'First' ? 'selected' : '' }}>First
                            </option>
                            <option value="Economy" {{ request('seat_class') === 'Economy' ? 'selected' : '' }}>Economy
                            </option>
                        </select>
                    </div>
                    <div class="input-group w-50">
                        <input class="form-control form-control-sm" type="search" name="search" value="{{ request('search') }}" placeholder="Search by seat number..." aria-label="Search">
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
                                <th>Flight ID</th> <!-- New Column -->
                                <th>Seat Number</th>
                                <th>Seat Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seats as $seat)
                                <tr>
                                    <td>{{ $seat->seat_id }}</td>
                                    <td>{{ $seat->flight_id }}</td> <!-- New Column Data -->
                                    <td>{{ $seat->seat_number }}</td>
                                    <td>{{ $seat->seat_class }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('seats.edit', $seat->seat_id) }}" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-warning btn-sm me-2">
                                                <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                                            </a>

                                            <form id="delete-form-{{ $seat->seat_id }}" action="{{ route('seats.destroy', $seat->seat_id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="confirmDelete({{ $seat->seat_id }})" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash-can" style="color: #ffffff;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $seats->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
{{-- </main> --}}

<script>
    function confirmDelete(seatId) {
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
                document.getElementById('delete-form-' + seatId).submit();
            }
        });
    }
</script>

@endsection
