<style>

/* Toggle button styling */
/* Sidebar styles */
.sidebar {
  position: fixed;
  top: 60px;
  left: 0px; Start hidden off-screen
  bottom: 0;
  width: 300px;
  z-index: 996;
  transition: left 0.3s ease; /* Smooth slide-in and slide-out animation */
  padding: 20px;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #fff;
}

/* When the sidebar is active */
.sidebar.active {
  left: -300px; /* Slide in to the visible position */
}

/* Toggle button styles */
.toggle-sidebar-btn {
  color: #333 !important;
  transition: color 0.3s ease !important;
}

.toggle-sidebar-btn:hover {
  color: #007bff !important;
}

/* Hide button when sidebar is not active */
.navbar-toggler {
  display: block !important;
}

/* Responsive behavior */
@media (max-width: 991.98px) {
  .navbar-toggler {
    display: block !important;
  }
}

</style>

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href='statstic'>
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('users.index') }}">
                <i class="bi bi-person"></i>
                <span>All Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href={{ route('tickets.index') }}>
                <i class="fa-solid fa-ticket"></i>
                <span>All Tickets</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('passengers.index') }}">
                <i class="fa-solid fa-person"></i>
                <span>All Passengers</span>
            </a>
        </li><!-- End Contact Page Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('flights.index') }}">
                <i class="fa-solid fa-plane-departure"></i>
                <span>All Flights</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('planes.index') }}">
                <i class="fa-solid fa-plane"></i>
                <span>All Planes</span>
            </a>
        </li><!-- End Contact Page Nav -->





    </ul>

</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.navbar-toggler'); // The toggle button
    const sidebar = document.querySelector('.sidebar'); // The sidebar element

    // Event listener for the toggle button
    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('active'); // Toggle the 'active' class
    });
});

</script>
@yield('sidebar')
