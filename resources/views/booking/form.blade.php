@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Passenger(s) and Document Details</h2>
    <form action="{{route('booking.preview')}}" method="post">
        @csrf
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user"></i> Adult 1
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="title" class="form-label">Title*</label>
                        <select class="form-select" id="title" name="title" required>
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="first_name" class="form-label">First name*</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="last_name" class="form-label">Last name*</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Date of birth*</label>
                        <div class="d-flex">
                            <select class="form-select me-1" id="dob_day" name="dob_day" required>
                                @for($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select class="form-select me-1" id="dob_month" name="dob_month" required>
                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" id="dob_year" name="dob_year" required>
                                @for($i = 1900; $i <= date('Y'); $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="nationality" class="form-label">Nationality*</label>
                        <select class="form-select" id="nationality" name="nationality" required>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="document_type" class="form-label">Document type*</label>
                        <select class="form-select" id="document_type" name="document_type" required>
                            <option value="Passport">Passport</option>
                            <!-- Add more document types as needed -->
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="issuing_country" class="form-label">Issuing country*</label>
                        <select class="form-select" id="issuing_country" name="issuing_country" required>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="document_number" class="form-label">Document number*</label>
                        <input type="text" class="form-control" id="document_number" name="document_number" required>
                    </div>
                    <div class="col-md-4">
                        <label for="expiry_date" class="form-label">Document expiry date*</label>
                        <div class="d-flex">
                            <select class="form-select me-1" id="expiry_day" name="expiry_day" required>
                                @for($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select class="form-select me-1" id="expiry_month" name="expiry_month" required>
                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" id="expiry_year" name="expiry_year" required>
                                @for($i = date('Y'); $i <= 10 + date('Y'); $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                </div>

            </div>
        </div>




        <input type="hidden" name="booking_date" value="{{\Carbon\Carbon::now()}}">
        <input type="hidden" name="class" value="{{ $class }}">
        <input type="hidden" name="flight_id" value="{{ $flight->id }}">
        <input type="hidden" name="flight_schedule_id" value="{{ $flightSchedule->id }}">
        <input type="hidden" name="seat_number" value="{{ $randomSeat }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
