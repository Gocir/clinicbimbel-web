@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <div class="container">
        <section class="jumbotron-maintenance">
            <div class="row py-4 m-auto">
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 order-2 order-lg-0 order-md-2 order-sm-0 my-auto">
                    <div class="title-maintenance text-light">
                        <h1 class="fw-bold m-auto display-1">Oops!</h1>
                        <h3 class="fw-bold mb-0">Dalam Masa Pembangunan</h3>
                        <h6>Website masih dalam pembangunan, mohon maaf atas ketidaknyamanannya.
                        </h6>
                    </div>
                    <div class="d-flex flex-row justify-content-center justify-content-lg-start mt-4">
                        <a href="https://www.facebook.com/clinicbimbel/" class="text-light mx-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/clinicbimbel/" class="text-light mx-1"><i
                                class="fab fa-instagram"></i></a>
                        <a href="http://wa.me/6283101065180" class="text-light mx-3"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div
                    class="col-xl-8 col-lg-7 col-md-12 col-sm-12 my-auto text-center order-1 order-lg-0 order-md-1 order-sm-0">
                    <img src="/img/under-construct.svg" class="img-fluid" alt="">
                </div>
            </div>
        </section>
    </div>
    {{-- End of Jumbotron --}}
@endsection
