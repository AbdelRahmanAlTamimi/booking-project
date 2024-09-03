@extends('layouts.main')

@section('content')
    @include('include.hero')
    {{-- @include('include.plan') --}}
    <!-- Plan area S t a r t -->
        <section class="plan-area-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="plan-section-three plan-shadow">
                    <div class="choose-plan-nav">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="plan-link active" id="book-tab" data-bs-toggle="tab" data-bs-target="#book"
                                    type="button" role="tab" aria-controls="book" aria-selected="false">
                                    <i class="ri-flight-takeoff-fill"></i> Book
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="tourTab">
                            <div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
                                <form action="{{ route('flights.search') }}" method="GET">
                                    @csrf
                                    <div class="d-flex gap-16 flex-wrap mb-26">
                                        <label class="one-way-label">
                                            <input class="one-way-input" type="radio" name="trip_type" value="one_way" checked>
                                            <span class="circle"></span>
                                            <span class="radio-text">One Way</span>
                                        </label>
                                        <label class="round-trip-label">
                                            <input class="round-trip-input" type="radio" name="trip_type" value="round_trip">
                                            <span class="circle"></span>
                                            <span class="radio-text">Round Trip</span>
                                        </label>
                                    </div>
                                    <div class="row g-4 justify-content-end">
                                        <div class="col-xl-5 col-lg-12">
                                            <div class="destination-flex">
                                                <div class="select-dropdown-section">
                                                    <select name="departure_airport" class="form-control">
                                                        @foreach($airports as $airport)
                                                            <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="select-dropdown-section">
                                                    <select name="arrival_airport" class="form-control">
                                                        @foreach($airports as $airport)
                                                            <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="swap-icon">
                                                    <i class="ri-arrow-left-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-lg-12">
                                            <div class="destination-flex">
                                                <div class="dropdown-section" id="departure-date-section">
                                                    <input type="date" name="departure_date" class="form-control">
                                                </div>
                                                <div class="dropdown-section" id="return-date-section">
                                                    <input type="date" name="return_date" class="form-control">
                                                </div>
                                                <div class="swap-icon">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3">
                                            <div class="sign-btn">
                                                <button type="submit" class="btn-secondary-lg w-100 text-center">
                                                    <i class="ri-search-line mr-10 font-20"></i> Search Plan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--/ End-of Plan-->
    @include('include.brand')
    @include('include.aboutUs')
@endsection