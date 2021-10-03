@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <div class="container">
        <section class="jumbotron">
            <div class="row">
                <div class="col-8 col-md-6 offset-md-3 col-lg-4 offset-lg-0 col-xl-5 offset-xl-0 m-auto">
                    <div class="content mb-4">
                        <h1 class="fw-bold m-auto display-5">Temukan Pengajar Profesional yang tepat untukmu</h1>
                        <h5>Kami hadir untuk mencerdaskan bangsa, menciptakan generasi yang edukatif
                            dan kreatif.</h5>
                    </div>
                    <div class="cta">
                        <a class="btn btn-lg btn-info text-light fs-6" href="/contact" role="button">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8 col-xl-6 m-auto">
                    <img src="/img/jumbotrons.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>
        <section class="accumulated">
            <div class="row justify-content-start text-center text-success">
                <div class="col-md-2">
                    <h3 class="fw-bold">40K+</h3>
                    <p>MENTOR</p>
                </div>
                <div class="col-md-2">
                    <h3 class="fw-bold">85%</h3>
                    <p>LOLOS UTBK</p>
                </div>
                <div class="col-md-2">
                    <h3 class="fw-bold">90%</h3>
                    <p>LOLOS KEDINASAN</p>
                </div>
                <div class="col-md-2">
                    <h3 class="fw-bold">8.5/10</h3>
                    <p>TINGKAT KEPUASAN</p>
                </div>
            </div>
        </section>
        {{-- <section class="mapel">
            <div class="row text-center">
                <h2>Pelajaran Populer</h2>
                <hr class="m-0 mx-lg-auto" style="width: 10%">
            </div>
            <div class="row">
                <div class="col"></div>
            </div>
        </section> --}}
    </div>
    {{-- End of Jumbotron --}}
@endsection
