@extends('layouts.app')

@section('content')
<div id="colorlib-services" class="colorlib-services">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold">Our Services</h2>
            <h2 class="colorlib-heading">Layanan Kami</h2>
        </div>

        <div class="row row-pb-md">
            <div class="col-md-4 text-center animate-box">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-1.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Digital & Offset Printing</h3>
                        <p>Cetak brosur, banner, kemasan, kartu nama, dan media promosi lainnya dengan hasil tajam dan presisi tinggi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-2.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Desain Grafis</h3>
                        <p>Tim kreatif kami siap membantu Anda menciptakan desain profesional yang memperkuat identitas merek bisnis Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services-wrap">
                    <div class="services-img" style="background-image: url('{{ asset('template/images/services-3.jpg') }}');"></div>
                    <div class="desc">
                        <h3>Promotional Merchandise</h3>
                        <p>Produksi merchandise seperti kaos, totebag, dan mug dengan desain custom dan kualitas terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
