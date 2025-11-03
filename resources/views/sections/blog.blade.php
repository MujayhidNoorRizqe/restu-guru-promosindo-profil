@extends('layouts.app')

@section('content')
<div id="colorlib-blog" class="colorlib-blog">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">BLOG</span>
                <h2 class="colorlib-heading">READ BLOG</h2>
            </div>
        </div>

        {{-- === 3 Kolom Blog Card === --}}
        <div class="row row-bottom-padded-md">
@for ($i = 1; $i <= 6; $i++)
    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
            {{-- Gunakan background-image agar tinggi seragam --}}
            <a href="#" class="blog-img" style="background-image: url('{{ asset('template/images/blog-'.$i.'.jpg') }}');"></a>
            <div class="desc">
                <span>
                    <small>Nov {{ 10 + $i }}, 2025 </small> |
                    <small>Design </small> |
                    <small><i class="icon-bubble2"></i> 4</small>
                </span>
                <h3><a href="#">Inspirasi Promosi {{ $i }}</a></h3>
                <p>Ide-ide promosi kreatif yang dapat memperkuat branding bisnis Anda melalui desain dan media digital.</p>
            </div>
        </div>
    </div>
@endfor

        </div>

        {{-- === Pagination === --}}
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- === Get in Touch Section === --}}
<section id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content text-center">
        <h2 class="colorlib-heading">Get in Touch!</h2>
        <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="{{ route('contact') }}" class="btn btn-primary btn-learn">Contact Me!</a></p>
    </div>
</section>
@endsection
