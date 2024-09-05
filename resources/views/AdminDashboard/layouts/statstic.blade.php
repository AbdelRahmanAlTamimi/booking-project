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
                    <h5 class="card-title">users <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $usercount }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                                <a href="{{ route('users.index') }}">view details</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-4">
            <div class="card info-card sales-card" style="background-color: #fbee78a2 ;">
                <div class="card-body">
                    <h5 class="card-title">flight <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-plane-departure" aria-hidden="true"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $flightcount }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                                <a href="{{ route('flights.index') }}">view details</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-4">
            <div class="card info-card sales-card" style="background-color: #ffebcc84 ;">
                <div class="card-body">
                    <h5 class="card-title">palnes <span>| All</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-plane" aria-hidden="true"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $plancount }}</h6>
                            <span class="text-success small pt-1 fw-bold">
                                <a href="{{ route('planes.index') }}">view details</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- CHARTS --}}
    <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Status Chart</h5>

                <!-- Pie Chart by koko -->
                <canvas id="all_chart"
                    style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 681px; color:# "
                    width="1362" height="800"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#all_chart'), {
                            type: 'pie',
                            data: {
                                labels: [
                                    'users',
                                    'Passengers',
                                    'Ticket',
                                    'flights',
                                    'planes'
                                ],
                                datasets: [{
                                    label: 'Current',
                                    data: [{{ $usercount }}, {{ $passengers }}, {{ $ticketCount }},
                                        {{ $flightcount }}, {{ $plancount }}
                                    ],
                                    backgroundColor: [
                                        '#cce5ff',
                                        '#d4edda',
                                        '#ff6384',
                                        '#fbee78a2  ',
                                        '#ffebcc84 ',
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Users Role Chart</h5>
    
                <!-- Pie Chart -->
                <canvas id="users_role_chart"
                    style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 681px;"
                    width="1362" height="800"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#users_role_chart'), {
                            type: 'pie',
                            data: {
                                labels: ['Admins', 'Users'],
                                datasets: [{
                                    label: 'Current',
                                    data: [{{ $adminCount }}, {{ $userscount }}],
                                    backgroundColor: [
                                        '#E0F7FA ', 
                                        '#F1F8EF '  
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tickets Status Chart</h5>
    
                <!-- Pie Chart -->
                <canvas id="tickets_status_chart"
                    style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 681px;"
                    width="1362" height="800"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#tickets_status_chart'), {
                            type: 'pie',
                            data: {
                                labels: ['pending', 'cancelled','booked'],
                                datasets: [{
                                    label: 'Current',
                                    data: [{{ $pendingcount }}, {{ $cancelledcount }},{{$bookedcount}}],
                                    backgroundColor: [
                                        '#CCCCFF ', 
                                        '#C1E1C1     ',  
                                        '#B0C4DE '  
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">planes Status Chart</h5>
    
                <!-- Pie Chart -->
                <canvas id="planes_status_chart"
                    style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 681px;"
                    width="1362" height="800"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#planes_status_chart'), {
                            type: 'pie',
                            data: {
                                labels: ['active', 'inactive'],
                                datasets: [{
                                    label: 'Current',
                                    data: [{{ $activecount }}, {{ $inactivecount }}],
                                    backgroundColor: [
                                        '#A9BA9D',  
                                        '#D19275', 
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
</div>
    
    <!-- End Pie Chart -->

    {{-- </main> --}}
@endsection
