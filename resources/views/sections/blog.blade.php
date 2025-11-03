@extends('layouts.app')

@section('content')
<div id="colorlib-blog" class="colorlib-blog">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold">Blog</h2>
            <h2 class="colorlib-heading">Artikel Terbaru</h2>
        </div>
        <div class="row">
            @for ($i = 1; $i <= 6; $i++)
                <div class="col-md-4 animate-box">
                    <div class="blog-entry">
                        <a href="#" class="blog-img"><img src="{{ asset('template/images/blog-'.$i.'.jpg') }}" class="img-responsive" alt=""></a>
                        <div class="desc">
                            <span><small>Nov {{ 10 + $i }}, 2025 </small> | <small>Design</small></span>
                            <h3><a href="#">Inspirasi Promosi {{ $i }}</a></h3>
                            <p>Ide-ide promosi kreatif yang dapat memperkuat branding bisnis Anda melalui desain dan media digital.</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
@endsection
