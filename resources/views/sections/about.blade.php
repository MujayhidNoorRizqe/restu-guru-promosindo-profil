@extends('layouts.app')

@section('content')
<section class="colorlib-about" data-section="about">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="about-img" style="background-image: url('{{ asset('template/images/img_bg_2.jpg') }}');"></div>
            </div>

            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="about-desc">
                    <span class="heading-meta">WELCOME</span>
                    <h2 class="colorlib-heading">WHO WE ARE</h2>
                    <p>CV. Restu Guru Promosindo adalah penyedia layanan percetakan dan promosi profesional yang membantu bisnis Anda tumbuh dengan citra kreatif dan modern. Kami menghadirkan solusi branding, desain grafis, serta cetak digital & offset dengan kualitas terbaik.</p>
                    <p>Kami berkomitmen untuk memberikan hasil yang presisi, cepat, dan konsisten agar setiap klien mendapatkan nilai maksimal dari setiap produk yang kami hasilkan.</p>
                </div>

                <div class="row features-row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-item">
                            <span class="icon-check icon-circle"></span>
                            <p>WE ARE<br>PASSIONATE</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-item">
                            <span class="icon-check icon-circle"></span>
                            <p>HONEST<br>DEPENDABLE</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-item">
                            <span class="icon-check icon-circle"></span>
                            <p>ALWAYS<br>IMPROVING</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-about" data-section="history">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="about-desc">
                    <span class="heading-meta">HISTORY</span>
                    <h2 class="colorlib-heading">Our Story</h2>
                    <p>Berawal dari keinginan untuk menyediakan layanan percetakan yang cepat, akurat, dan terjangkau, CV. Restu Guru Promosindo kini telah berkembang menjadi mitra bisnis terpercaya bagi berbagai instansi dan perusahaan di Indonesia.</p>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">WHY CHOOSE US?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Kami mengutamakan kecepatan, akurasi, dan kepuasan pelanggan dengan hasil cetakan berkualitas tinggi dan desain yang menarik.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">OUR SERVICES</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Mulai dari desain logo, banner, brosur, kemasan produk, hingga media promosi digital — kami siap menjadi solusi lengkap Anda.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">OUR VALUES</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Integritas, kualitas, dan kreativitas adalah nilai utama yang kami pegang untuk setiap proyek yang kami kerjakan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-counters" id="colorlib-counter" style="background-image: url('{{ asset('template/images/cover_bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="icon-briefcase3"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Projects</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="icon-group"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Clients</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="icon-globe"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Projects Completed</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="icon-heart3"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Partners</span>
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
