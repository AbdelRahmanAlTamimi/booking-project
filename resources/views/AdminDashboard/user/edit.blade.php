@section('title') Edit @endsection
@extends('AdminDashboard.index')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">first_name:</label>
            <input type="first_name" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">last_name:</label>
            <input type="last_name" name="last_name" class="form-control" value="{{ $user->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update User</button>
    </form>
</div>
@endsection