@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h5 class="card-title">Create New Plane</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('aircrafts.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="plane_type_id" class="form-label">Plane Type</label>
                        <select class="form-select" id="plane_type_id" name="plane_type_id" required>
                            <option value="" disabled selected>Select Plane Type</option>
                            <!-- Assuming plane types are available in a variable named `$planeTypes` -->
                            @foreach ($Plane as $type)
                                <option value="{{ $type->plane_id }}">{{ $type->model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="" selected>Choose status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
                    </div>
                    <div class="mb-3">
                        <label for="total_seats" class="form-label">Total Seats</label>
                        <input type="number" class="form-control" id="total_seats" name="total_seats" value="{{ old('total_seats') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Plane</button>
                </form>
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
