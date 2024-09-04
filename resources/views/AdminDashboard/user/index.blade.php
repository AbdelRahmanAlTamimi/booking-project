@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card recent-sales overflow-auto shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title m-0">All Users</h5>
            </div>

            <div class="card-body">
                <!-- Update the action attribute to point to the users.index route -->
                <form method="GET" action="{{ route('users.index') }}"
                    class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                    <div class="d-flex align-items-center mb-2 mb-md-0">
                        <label class="form-label me-2 mb-0">Entries per page:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="per-page"
                            onchange="this.form.submit()">
                            <option value="5" {{ request('per-page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per-page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per-page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="{{ $totalUsers }}"
                                {{ request('per-page') == $totalUsers ? 'selected' : '' }}>All</option>
                        </select>
                    </div>
                    <div class="ms-3">
                        <label class="form-label me-2 mb-0">role:</label>
                        <select class="form-select form-select-sm w-auto d-inline-block" name="role"
                            onchange="this.form.submit()">
                            <option value="" {{ request('role') === '' ? 'selected' : '' }}>All</option>
                            <option value="user" {{ request('role') === 'user' ? 'selected' : '' }}>user
                            </option>
                            <option value="admin" {{ request('role') === 'admin' ? 'selected' : '' }}>admin
                            </option>
                        </select>
                    </div>
                    <div class="input-group w-50 mb-2 mb-md-0">
                        <input class="form-control form-control-sm" type="search" name="search"
                            value="{{ request('search') }}" placeholder="Search by name..." aria-label="Search">
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="d-flex flex-wrap gap-2">
                                        <a href="{{ route('users.edit', $user->id) }}" style="width: fit-content; height: fit-content; display: flex; justify-content: center; align-items: center;" class="btn btn-warning d-flex align-items-center justify-content-center" style="flex: 1;">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline-block" style="flex: 1;">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="confirmDelete(event, {{ $user->id }})" class="btn btn-danger d-flex align-items-center justify-content-center" style="flex: 1;">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function confirmDelete(event, userId) {
        event.preventDefault(); // Prevent the default form submission

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
                document.getElementById('delete-form-' + userId).submit();
            }
        });
    }
</script>

{{-- @endsection --}}
