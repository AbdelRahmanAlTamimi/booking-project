
@extends('AdminDashboard.index')
@section('content')
<div class="container">
    <h1>User Details</h1>
    <p><strong>ID:</strong> {{ $users->id }}</p>
    <p><strong>Name:</strong> {{ $users->first_name }}</p>
    <p><strong>Name:</strong> {{ $users->last_name }}</p>
    <p><strong>Email:</strong> {{ $users->email }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users List</a>
</div>
@endsection