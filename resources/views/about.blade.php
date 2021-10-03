@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <div class="container">
        <section class="jumbotron">
            <div class="row pt-4">
                <div class="col-8 col-md-6 offset-md-3 col-lg-4 offset-lg-0 col-xl-4 offset-xl-0 my-auto">
                    <div class="content">
                        <h1 class="fw-bold m-auto display-4" style="font-size: 6vw">Oops!</h1>
                        <h4 class="fw-bold mb-0" style="font-size: 2.2vw">Dalam Masa Pembangunan</h4>
                        <h5 style="font-size: 1.2vw">Website masih dalam pembangunan, mohon maaf atas ketidaknyamanannya.
                        </h5>
                    </div>
                    {{-- <div class="cta">
                        <a class="btn btn-success fs-5" href="/contact" role="button">Info lebih lanjut<i
                                class="fas fa-chevron-right ms-2"></i></a>
                    </div> --}}
                    <div class="d-flex flex-row mt-5">
                        <a href="https://www.facebook.com/clinicbimbel/" class="text-dark mx-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/clinicbimbel/" class="text-dark mx-1"><i
                                class="fab fa-instagram"></i></a>
                        <a href="http://wa.me/6283101065180" class="text-dark mx-3"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8 col-xl-8 my-auto text-center">
                    <img src="/img/under-construct.svg" class="img-fluid" alt="">
                </div>
            </div>
        </section>
    </div>
    {{-- End of Jumbotron --}}
@endsection
