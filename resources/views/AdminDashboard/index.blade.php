<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'Dashboard') - YourAppName</title>
  <meta content="Your description" name="description">
  <meta content="Your keywords" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  @yield('head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('AdminDashboard.layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('AdminDashboard.layouts.sidebar')
  <!-- End Sidebar -->

  <!-- MAIN CONTENT -->
  <main id="main" class="main">
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card sales-card">

        <div class="card-body">
          <h5 class="card-title">Tickets <span>| All</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-cart"></i>
            </div>
            <div class="ps-3">
              <h6>{{$ticketCount}}</h6>
              <span class="text-success small pt-1 fw-bold"> <a href={{ route('tickets.index') }}>view details</a></span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card sales-card">

        <div class="card-body">
          <h5 class="card-title">Passengers<span>| All</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-cart"></i>
            </div>
            <div class="ps-3">
              <h6>{{$passengers}}</h6>
              <span class="text-success small pt-1 fw-bold"> <a href={{ route('tickets.index') }}>view details</a></span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card sales-card">

        <div class="card-body">
          <h5 class="card-title">Seats<span>| All</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-cart"></i>
            </div>
            <div class="ps-3">
              <h6>{{$seatsCount}}</h6>
              <span class="text-success small pt-1 fw-bold"> <a href={{ route('tickets.index') }}>view details</a></span>

            </div>
          </div>
        </div>
      </div>
    </div>


  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('AdminDashboard.layouts.footer')
  <!-- End Footer -->

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @yield('script')

</body>

</html>