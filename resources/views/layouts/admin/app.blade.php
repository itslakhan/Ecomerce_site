

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('admin-css/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('admin-css/assets/css/styles.min.css') }}" />
</head>

<body>
    @include('components.admin.sidebar')
    <div class="body-wrapper">
      <!--  Header Start -->
    @include('components.admin.header')
     
      <!--  Header End -->
         @yield('admincontent')
    </div>
  </div>



  <script src="{{ asset('admin-cc/assets/libs/jquery/dist/jquery.min.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/js/sidebarmenu.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/js/app.min.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/libs/apexcharts/dist/apexcharts.min.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/libs/simplebar/dist/simplebar.js ') }}"></script>
  <script src="{{ asset('admin-cc/assets/js/dashboard.js ') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  {{-- @stack('footer-script')      --}}
  
</body>

</html>