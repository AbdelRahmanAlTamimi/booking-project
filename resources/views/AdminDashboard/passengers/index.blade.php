@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card recent-sales overflow-auto shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">All Passengers</h5>
            </div>

            <div class="card-body">
                <!-- Update the action attribute to point to the passengers.index route -->
                <form method="GET" action="{{ route('passengers.index') }}" class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <label class="form-label me-2 mb-0">Entries per page:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="per-page" onchange="this.form.submit()">
                            <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="{{ $totalPassengers }}" {{ request('per-page') == $totalPassengers ? 'selected' : '' }}>All</option>
                        </select>
                    </div>
                    <div class="input-group w-50">
                        <input class="form-control form-control-sm" type="search" name="search" value="{{ request('search') }}" placeholder="Search by name..." aria-label="Search">
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
                                <th>User ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passengers as $passenger)
                                <tr>
                                    <td>{{ $passenger->passenger_id }}</td>
                                    <td>{{ $passenger->user_id }}</td>
                                    <td>{{ $passenger->first_name }}</td>
                                    <td>{{ $passenger->last_name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('passengers.edit', $passenger->id) }}" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-warning btn-sm me-2">
                                                <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                                            </a>

                                            <form id="delete-form-{{ $passenger->id }}" action="{{ route('passengers.destroy', $passenger->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="confirmDelete({{ $passenger->id }})" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-danger btn-sm">
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
                    {{ $passengers->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function confirmDelete(passengerId) {
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
                document.getElementById('delete-form-' + passengerId).submit();
            }
        });
    }
</script>

{{-- @endsection --}}
