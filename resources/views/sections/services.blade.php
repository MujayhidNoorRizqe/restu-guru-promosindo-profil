@extends('layouts.app')

@section('content')
<section class="colorlib-services" data-section="services">
    <div class="colorlib-narrow-content">

        {{-- ====== HEADER ====== --}}
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">SERVICES</span>
                <h2 class="colorlib-heading">Here are some of our expertise</h2>
            </div>
        </div>

        {{-- ====== EXPERTISE GRID ====== --}}
        <div class="row row-pt-md">
            <div class="col-md-6 text-left animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon">
                        <i class="icon-tools"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>General Contracting</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-left animate-box" data-animate-effect="fadeInRight">
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon">
                        <i class="icon-pencil"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>Building &amp; Modeling</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-left animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon">
                        <i class="icon-layers"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>Pre-construction Design</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-left animate-box" data-animate-effect="fadeInRight">
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon">
                        <i class="icon-linegraph"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>Construction Management</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ====== SERVICES IMAGES (3 BOX) ====== --}}
        <div class="row row-pb-md">
            <div class="col-md-4 text-center animate-box" data-animate-effect="fadeInUp">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-1.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Design &amp; Build</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box" data-animate-effect="fadeInUp">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-4.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Painting &amp; Tiling</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box" data-animate-effect="fadeInUp">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-5.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Kitchen Remodeling</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ====== GET IN TOUCH SECTION ====== --}}
<section id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content text-center">
        <h2 class="colorlib-heading">Get in Touch!</h2>
        <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="{{ url('/contact') }}" class="btn btn-primary btn-learn">Contact Me!</a></p>
    </div>
</section>
@endsection
