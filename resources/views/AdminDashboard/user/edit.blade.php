@section('title') Edit @endsection
@extends('AdminDashboard.index')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $user->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role" class="form-control" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                <option value="moderator" {{ $user->role == 'moderator' ? 'selected' : '' }}>Moderator</option>
                <!-- Add more roles as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update User</button>
    </form>
</div>
@endsection
