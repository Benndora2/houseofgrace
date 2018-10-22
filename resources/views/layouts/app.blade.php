<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>House of Grace Church - Eldoret @yield('title')</title>
    <meta name="description"
          content=" <strong>House of Grace Church - Eldoret<strong>  was Launched on 16th January 2015. It is located
           in Kapsoya, opposite The Noble Hotel,a few meters from the Nairobi – Eldoret Highway.">
    <meta name="keywords" content="house of grace eldoret, house of grace, church eldoret, house of grace church
    eldoret, eldoret, church , Kenya, house of grace eldoret kenya">
    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{--<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    {{--<script src="{{ mix('js/app.js') }}"></script>--}}

    <!-- Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>

        <!-- =========================== HEADER BEGIN  =========================== -->
                 @include('include.header')
        <!-- =========================== HEADER END =========================== -->

        @yield('content')

        <!-- =========================== FOOTER BEGIN  =========================== -->
        @include('include.footer')
        <!-- =========================== FOOTER END =========================== -->


        <!-- Scripts -->
        <!-- bootstrap 4.1.3 cdn -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Owl Carousel -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        {{--<script src="{{asset('js/bigSlide.min.js')}}"></script>--}}
        @yield('scripts')
        {{--<script>--}}
            {{--jQuery(document).ready(function() {--}}
                {{--jQuery('.toggle-nav').click(function(e) {--}}
                    {{--jQuery(this).toggleClass('active');--}}
                    {{--jQuery('.menu ul').toggleClass('active');--}}
                    {{--e.preventDefault();--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
        {{--<script>--}}
            {{--$(document).ready(function() {--}}
                {{--$('.menu-link').bigSlide();--}}
            {{--});--}}
        {{--</script>--}}
</body>
</html>
