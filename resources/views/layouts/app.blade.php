<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yeild('title','Villa Agency - Real Estate HTML5 Template')</title>
    <link href="{{ asset('Frontend/vendor/bootstrap/css/bootstrap.min.css') }}?v=1.0" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
<body>
    {{-- TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

--> --}}

    @include('layouts.preloader')
    @include('layouts.sub-header')
    @include('layouts.header')


    <main>
        @yield('content')


    </main>

    @include('layouts.footer')
    <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

  <script src="/Frontend/vendor/jquery/jquery.min.js"></script>
  <script src="/Frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/Frontend/assets/js/isotope.min.js"></script>
  <script src="/Frontend/assets/js/owl-carousel.js"></script>
  <script src="/Frontend/assets/js/counter.js"></script>
  <script src="/Frontend/assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script> --}}

  @yield('scripts')
</body>
</html>







