<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

    <title>Contact Us</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

            @yield('content')
            <!-- jQuery -->
            <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

            <!-- Bootstrap -->
            <script src="{{ asset('js/popper.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>

            <!-- Plugins -->
            <script src="{{ asset('js/owl-carousel.js') }}"></script>
            <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
            <script src="{{ asset('js/waypoints.min.js') }}"></script>
            <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('js/imgfix.min.js') }}"></script>
            <script src="{{ asset('js/slick.js') }}"></script>
            <script src="{{ asset('js/lightbox.js') }}"></script>
            <script src="{{ asset('js/isotope.js') }}"></script>

            <!-- Global Init -->
            <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
