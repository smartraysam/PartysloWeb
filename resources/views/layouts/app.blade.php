<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Partyslo">
    <meta name="author" content="Partyslo">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/{{ Session::get('theme') }}">
    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">
    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/imageuploader/image-uploader.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-tagsinput/tagsinput.css') }}">


</head>

<body>
    @include('theme.header')
    @yield('content')
    @include('theme.footer')
    @yield('scripts')
    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/popper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.nice-select.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/datepicker.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/imageuploader/image-uploader.min.js') }}"></script>

    <script type='text/javascript' src="{{ asset('js/custom1.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
