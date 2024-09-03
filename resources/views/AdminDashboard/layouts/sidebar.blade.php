<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href={{ route('bookings.index') }}>
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href={{ route('bookings.index') }}>
                <i class="fa-solid fa-ticket"></i>
                <span>all Tickets</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('bookings.create') }}">
                <i class="bi bi-plus-circle"></i>
                <span>Create Ticket</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('passengers.index') }}">
                <i class="fa-solid fa-person"></i>
                <span>All Passengers</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('passengers.create') }}">
                <i class="bi bi-plus-circle"></i>
                <span>Create Passengers</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('seats.index') }}">
                <i class="fa-solid fa-chair"></i>
                <span>All Seats</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('seats.create') }}">
                <i class="bi bi-plus-circle"></i>
                <span>Create Seats</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('flights.index') }}">
                <i class="fa-solid fa-plane-departure"></i>
                <span>All Flights</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('flights.create') }}">
                <i class="bi bi-plus-circle"></i>
                <span>Create Flights</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('aircrafts.index') }}">
                <i class="fa-solid fa-plane"></i>
                <span>All aircrafts</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('aircrafts.create') }}">
                <i class="bi bi-plus-circle"></i>
                <span>Create aircrafts</span>
            </a>
        </li><!-- End Contact Page Nav -->




    </ul>

</aside>
@yield('sidebar')
