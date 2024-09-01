<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href={{ route('tickets.index') }}>
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href={{ route('tickets.index') }}>
                <i class="bi bi-person"></i>
                <span>all tickets</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('users.index') }}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('tickets.create') }}">
                <i class="bi bi-envelope"></i>
                <span>create ticket</span>
            </a>
        </li><!-- End Contact Page Nav -->




    </ul>

</aside>
@yield('sidebar')
