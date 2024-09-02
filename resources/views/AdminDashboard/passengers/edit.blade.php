@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Passenger</h5>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Edit Passenger Form -->
                <form action="{{ route('passengers.update', $passenger->passenger_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- User ID -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $passenger->user_id ? 'selected' : '' }}>
                                    {{ $user->first_name }} {{ $user->last_name }} 
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- First Name -->
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $passenger->first_name) }}" required>
                    </div>

                    <!-- Last Name -->
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $passenger->last_name) }}" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update Passenger</button>
                </form>

            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
