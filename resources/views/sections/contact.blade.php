@extends('layouts.app')

@section('content')
<div id="colorlib-contact" class="colorlib-contact">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold">Contact</h2>
            <h2 class="colorlib-heading">Hubungi Kami</h2>
        </div>

        <div class="row">
            <div class="col-md-6 animate-box">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="30" rows="7" placeholder="Pesan Anda"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-send-message">
                    </div>
                </form>
            </div>

            <div class="col-md-6 animate-box">
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon"><i class="icon-map"></i></div>
                    <div class="colorlib-text"><p>Jl. Contoh No. 123, Sukorejo, Indonesia</p></div>
                </div>
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon"><i class="icon-phone"></i></div>
                    <div class="colorlib-text"><p><a href="tel://6281234567890">+62 812 3456 7890</a></p></div>
                </div>
                <div class="colorlib-feature colorlib-feature-sm">
                    <div class="colorlib-icon"><i class="icon-envelope"></i></div>
                    <div class="colorlib-text"><p><a href="mailto:info@restuguru.id">info@restuguru.id</a></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
