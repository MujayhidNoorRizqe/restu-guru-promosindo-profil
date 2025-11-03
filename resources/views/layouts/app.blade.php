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
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <script src="{{ asset('template/js/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>

<div id="colorlib-page">
    {{-- Toggle button for mobile menu --}}
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    {{-- Sidebar --}}
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo">
            <a href="{{ route('home') }}">Restu Guru<span>.</span></a>
        </h1>

        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="{{ request()->routeIs('home') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('work') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('work') }}">Project</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->routeIs('services') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li class="{{ request()->routeIs('blog') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="{{ request()->routeIs('contact') ? 'colorlib-active' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>

        {{-- Footer --}}
        <div class="colorlib-footer">
            <p>
                <small>
                    &copy; <script>document.write(new Date().getFullYear());</script>
                    Restu Guru Promosindo<br>
                    Template by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </small>
            </p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
        </div>
    </aside>

    {{-- Main Content --}}
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
<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>

{{-- Tambahkan hanya di halaman Contact --}}
@stack('scripts')

</body>
</html>
