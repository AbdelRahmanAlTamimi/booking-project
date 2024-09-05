@extends('AdminDashboard.index')

@section('content')
    {{-- <main id="main" class="main"> --}}
        <div class="col-12">
            <div class="card recent-sales overflow-auto shadow-sm mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0">All Planes</h5>
                    <a href="{{route('planes.create')}}" type="button" class="btn btn-primary">Create Plane</a>

                </div>

                <div class="card-body">
                    <!-- Planes Filter Form -->
                    <form method="GET" action="{{ route('planes.index') }}"
                        class="d-flex justify-content-between align-items-center mb-3">
                        <!-- Entries per Page Selection -->
                        <div>
                            <label class="form-label me-2 mb-0">Entries per page:</label>
                            <select class="form-select form-select-sm w-auto d-inline-block" name="per-page"
                                onchange="this.form.submit()">
                                <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                                <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                                <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                                <option value="{{ $totalPlanes }}"
                                    {{ request('per-page') == $totalPlanes ? 'selected' : '' }}>All</option>
                            </select>
                        </div>

                        <div class="ms-3">
                            <label class="form-label me-2 mb-0">Status:</label>
                            <select class="form-select form-select-sm w-auto d-inline-block" name="status"
                                onchange="this.form.submit()">
                                <option value="" {{ request('status') === '' ? 'selected' : '' }}>All</option>
                                <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>
                        <div class="input-group w-50">
                            <input class="form-control form-control-sm" type="search" name="search"
                                value="{{ request('search') }}" placeholder="Search..." aria-label="Search">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </div>

                        <!-- Status Filter -->
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

                    <!-- Planes Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Model</th>
                                    <th>Total Seats</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planes as $plane)
                                    <tr>
                                        <td>{{ $plane->plane_id }}</td>
                                        <td>{{ $plane->model ?? 'Not found' }}</td>
                                        <td>{{ $plane->total_seats ?? 'Not found' }}</td>
                                        <td>{{ $plane->status ?? 'Not found' }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Edit Button -->
                                                <a href="{{ route('planes.edit', $plane->plane_id) }}"
                                                    style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;"
                                                    class="btn btn-warning btn-sm me-2">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                <form id="delete-form-{{ $plane->plane_id }}"
                                                    action="{{ route('planes.destroy', $plane->plane_id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;"
                                                        type="button" onclick="confirmDelete({{ $plane->plane_id }})"
                                                        class="btn btn-danger btn-sm">
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
                        {{ $planes->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    {{-- </main> --}}

    <!-- Delete Confirmation Script -->
    <script>
        function confirmDelete(planeId) {
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
                    document.getElementById('delete-form-' + planeId).submit();
                }
            });
        }
    </script>
    @endsection
