@extends('AdminDashboard.index')

@section('content')
<main id="main" class="main">
    <div class="col-12">
        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h5 class="card-title">Edit Plane</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('planes.update', $plane->plane_id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="" disabled>Choose status</option>
                            <option value="active" {{ $plane->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $plane->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $plane->model) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="total_seats" class="form-label">Total Seats</label>
                        <input type="number" class="form-control" id="total_seats" name="total_seats" value="{{ old('total_seats', $plane->total_seats) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Plane</button>
                </form>
            </div>
        </div>
    </div>
</main>
{{-- @endsection --}}
