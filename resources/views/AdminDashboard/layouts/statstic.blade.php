@extends('AdminDashboard.index')

@section('content')
{{-- <main id="main" class="main"> --}}
    <div class="row">
        <div class="col-xxl-4 col-md-6 mb-4">
            <div class="card info-card sales-card" style="background-color: #f8d7da;">
                <div class="card-body">
                    <h5 class="card-title">Tickets <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-ticket-fill"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $ticketCount }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                              <a href="{{ route('tickets.index') }}">view details</a>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-6 mb-4">
            <div class="card info-card sales-card" style="background-color: #d4edda;">
                <div class="card-body">
                    <h5 class="card-title">Passengers <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $passengers }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                              <a href="{{ route('passengers.index') }}">view details</a>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-6 mb-4">
            <div class="card info-card sales-card" style="background-color: #cce5ff;">
                <div class="card-body">
                    <h5 class="card-title">Seats <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $seatsCount }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                              <a href="{{ route('tickets.index') }}">view details</a>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CHARTS --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Status chart</h5>

                <!-- Pie Chart by koko -->
                <canvas id="pieChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 681px; color:# " width="1362" height="800"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#pieChart'), {
                            type: 'pie',
                            data: {
                                labels: [
                                    'Seats',
                                    'Passengers',
                                    'Ticket'
                                ],
                                datasets: [{
                                    label: 'Current',
                                    data: [{{ $seatsCount }}, {{ $passengers }}, {{ $ticketCount }}],
                                    backgroundColor: [
                                        '#cce5ff',
                                        '#d4edda',
                                        '#ff6384'
                                    ],
                                    hoverOffset: 4
                                }]
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- End Pie Chart -->

{{-- </main> --}}
@endsection
