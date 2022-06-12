<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="SI Maniac Development">
  <title>APOTEKU | @yield('title') </title>
  <!-- Favicon -->
  {{-- <link href="{{ asset('../mainweb/img/logo/logo.ico') }}" rel="shorcut icon"> --}}
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.1.0') }}" type="text/css">
</head>

<body>
   {{-- @include('sweetalert::alert') --}}
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('admin/assets/img/brand/white.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">All Team</span>
              </a>
              <div class="collapse show" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Kategori</a>
                    <a href="#" class="nav-link">Daftar Obat</a>
                    <a href="#" class="nav-link">Daftar Customer</a>
                    <a href="#" class="nav-link">Report Obat Terlaris</a>
                    <a href="#" class="nav-link">Report Customer Terbanyak</a>
                  </li>
                </ul>
              </div>
            </li>

            {{-- <li class="nav-item">
              <a href="{{ url('home') }}" class="nav-link">
                <span class="nav-link-text">Back to Home</span>
              </a>
            </li> --}}
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <div class="media align-items-center">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Hello, Admin</span>
                </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right show">
                  <a href="#!" class="dropdown-item">
                     <i class="ni ni-user-run"></i>
                     <span>Logout</span>
                  </a>
               </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <section class="header pb-6">
      <div class="container-fluid">
        @yield('header')
      </div>
    </section>
    <!-- Page content -->
    <section class="container-fluid mt--6">
       @yield('content')
    </section>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('admin/assets/js/argon.js?v=1.1.0') }}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{ asset('admin/assets/js/demo.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
   @yield('javascript')
</body>
<!-- <script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
});
</script> -->
</html>