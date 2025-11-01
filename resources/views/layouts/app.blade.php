<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CV. Restu Guru Promosindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

    <script src="{{ asset('template/js/modernizr-2.6.2.min.js') }}"></script>
</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo">
            <a href="{{ route('home') }}">Restu Guru<span>.</span></a>
        </h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('work') }}">Project</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <p><small>&copy; <script>document.write(new Date().getFullYear());</script> Restu Guru Promosindo<br>
                Template by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></small></p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-main">
        @yield('content')
    </div>
</div>

{{-- JS --}}
<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('template/js/jquery.countTo.js') }}"></script> <!-- tambahkan baris ini -->
<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script> <!-- tambahkan baris ini juga -->
<script src="{{ asset('template/js/main.js') }}"></script>

</body>
</html>
