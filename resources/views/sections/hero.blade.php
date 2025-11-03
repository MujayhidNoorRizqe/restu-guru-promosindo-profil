@extends('layouts.app')

@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">

            {{-- SLIDE 1 --}}
            <li style="background-image: url('{{ asset('template/images/img_bg_3.jpg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc animate-box" data-animate-effect="fadeInUp">
                                    <h1>An Inspiring Built Space</h1>
                                    <h2>100% HTML5 Bootstrap template made by colorlib.com</h2>
                                    <p><a href="{{ route('work') }}" class="btn btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            {{-- SLIDE 2 --}}
            <li style="background-image: url('{{ asset('template/images/img_bg_1.jpg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc animate-box" data-animate-effect="fadeInUp">
                                    <h1>Creative &amp; Professional</h1>
                                    <h2>Solusi promosi dan percetakan terbaik untuk bisnis Anda.</h2>
                                    <p><a href="{{ route('about') }}" class="btn btn-learn">About Us <i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>
@endsection
