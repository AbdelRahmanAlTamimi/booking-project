@section('title') Create @endsection

@extends('AdminDashboard.index')

@section('content')
<div class="container">
    <h1>Create New User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">first_name:</label>
            <input type="first_name" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">last_name:</label>
            <input type="last_name" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
          <div class="form-group">
            <label for="Password">Password:</label>
            <input type="Password" name="Password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
</div>
@endsection