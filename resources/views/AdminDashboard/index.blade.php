{{-- ========هون كل التوسيع (extend)
{{-- كوكو --}}
<!-- {{-- ========هون كل التوسيع (extend) -->
{{--كوكو--}}

{{-- @extends('AdminDashboard.layouts.head')
@extends('AdminDashboard.layouts.header')
@extends('AdminDashboard.layouts.sidebar')
@extends('AdminDashboard.layouts.footer')
@extends('AdminDashboard.layouts.script')


@section('head')
@endsection

<body> --}}

<!-- ======= Header ======= -->

{{-- @section('header')
  @endsection --}}
<!-- End Header -->

<!-- ======= Sidebar ======= -->
{{-- @section('sidebar')
  @endsection --}}
<!-- End Sidebar-->
<!-- MAIN هون كل الشغل تبعك يا مثنى لا تخرب الدنيا-->
{{-- <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card sales-card">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Sales <span>| Today</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-cart"></i>
            </div>
            <div class="ps-3">
              <h6>145</h6>
              <span class="text-success small pt-1 fw-bold">12%</span> <span
                class="text-muted small pt-2 ps-1">increase</span>

            </div>
          </div>
        </div>

      </div>
    </div> --}}

<!-- report card \ koko card  -->
{{-- @yield('content') --}}
{{-- <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Recent Sales <span>| Today</span></h5>

          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
            <div class="datatable-top">
              <div class="datatable-dropdown">
                <label>
                  <select class="datatable-selector" name="per-page">
                    <option value="5">5</option>
                    <option value="10" selected="">10</option>
                    <option value="15">15</option>
                    <option value="-1">All</option>
                  </select> entries per page
                </label>
              </div>
              <div class="datatable-search">
                <input class="datatable-input" placeholder="Search..." type="search" name="search"
                  title="Search within table">
              </div>
            </div>
            <div class="datatable-container">
              <table class="table table-borderless datatable datatable-table">
                <thead>
                  <tr>
                    <th scope="col" data-sortable="true" style="width: 10.704022988505747%;"><button
                        class="datatable-sorter">#</button></th>
                    <th scope="col" data-sortable="true" style="width: 23.49137931034483%;"><button
                        class="datatable-sorter">Customer</button></th>
                    <th scope="col" data-sortable="true" style="width: 39.29597701149425%;"><button
                        class="datatable-sorter">Product</button></th>
                    <th scope="col" data-sortable="true" style="width: 11.709770114942529%;"><button
                        class="datatable-sorter">Price</button></th>
                    <th scope="col" data-sortable="true" class="red" style="width: 14.798850574712644%;"><button
                        class="datatable-sorter">Status</button></th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-index="0">
                    <td scope="row"><a href="#">#2457</a></td>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>$64</td>
                    <td class="green"><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr data-index="1">
                    <td scope="row"><a href="#">#2147</a></td>
                    <td>Bridie Kessler</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                    <td>$47</td>
                    <td class="green"><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr data-index="2">
                    <td scope="row"><a href="#">#2049</a></td>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>$147</td>
                    <td class="green"><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr data-index="3">
                    <td scope="row"><a href="#">#2644</a></td>
                    <td>Angus Grady</td>
                    <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                    <td>$67</td>
                    <td class="green"><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr data-index="4">
                    <td scope="row"><a href="#">#2644</a></td>
                    <td>Raheem Lehner</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td class="green"><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="datatable-bottom">
              <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
              <nav class="datatable-pagination">
                <ul class="datatable-pagination-list"></ul>
              </nav>
            </div>
          </div>

        </div>

      </div>
    </div> --}}
<!-- End Page Title -->


{{-- </main> --}}
<!-- End #main -->

<!-- ======= Footer ======= -->
{{-- @section('footer')
  @endsection --}}

<!-- End Footer -->
{{-- @section('script')
@endsection --}}


{{-- </body> --}}

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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('AdminDashboard.layouts.footer')
    <!-- End Footer -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://kit.fontawesome.com/a49038f582.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('script')

</body>

</html>
