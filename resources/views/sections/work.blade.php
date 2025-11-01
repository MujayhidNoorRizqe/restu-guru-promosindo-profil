<section id="work" class="colorlib-work" data-section="work">
    <div class="container">
        <div class="row text-center">
            <span class="heading-meta">Our Portfolio</span>
            <h2 class="colorlib-heading">Hasil Karya</h2>
        </div>
        <div class="row">
            @for($i = 1; $i <= 6; $i++)
                <div class="col-md-4 animate-box">
                    <div class="project" style="background-image: url('{{ asset('template/images/work-' . $i . '.jpg') }}');">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="#">Project {{ $i }}</a></h3>
                                <span>Design &amp; Printing</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
