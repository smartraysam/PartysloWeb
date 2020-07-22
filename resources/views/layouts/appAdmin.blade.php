<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title> @yield('title')</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('css/elegant-fonts.css') }}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="single-page causes-page about-page contact-page elements-page news-page portfolio  single-cause">
    <div id="app">

        @include('theme.nav')
        <main class="py-4">
            @yield('content')
        </main>
        @include('theme.footer')
    </div>

    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.barfiller.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/style.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/donate.js') }}"></script>


</body>

</html>