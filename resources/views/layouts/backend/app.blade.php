<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('backend/assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    type="text/css">
  <!-- Page plugins -->
  <!-- Data Tables -->
  <link rel="stylesheet"
    href="{{ asset('backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('backend/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('backend/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/argon.css') }}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <x-dashboard.side-nav />

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <x-dashboard.top-nav />

    <!-- yield content -->
    @yield('content')

  </div>

  <!-- Scripts -->
  <!-- Core -->
  <script src="{{ asset('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>

  <!-- Optional JS -->
  <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
  <!-- Data Tables -->
  <script src="{{ asset('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

  <!-- Argon JS -->
  <script src="{{ asset('backend/assets/js/argon.js') }}"></script>

  <!-- Custom JS -->
  @yield('script');
</body>

</html>
