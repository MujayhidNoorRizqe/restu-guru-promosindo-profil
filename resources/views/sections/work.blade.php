@extends('layouts.app')

@section('content')
<section class="colorlib-work" data-section="work">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">MY WORK</span>
                <h2 class="colorlib-heading">OUR WORK</h2>
            </div>
        </div>

        <div class="row row-bottom-padded-md">
            @for ($i = 1; $i <= 9; $i++)
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <div class="project" style="background-image: url('{{ asset('template/images/img-' . $i . '.jpg') }}');">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="#">WORK 0{{ $i }}</a></h3>
                            <span>Design & Printing</span>
                            <p class="icon">
                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content text-center">
        <h2 class="colorlib-heading">Get in Touch!</h2>
        <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="{{ route('contact') }}" class="btn btn-primary btn-learn">Contact Me!</a></p>
    </div>
</section>
@endsection
