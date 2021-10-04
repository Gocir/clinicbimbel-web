@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <div class="container">
        <section class="sosmed my-5">
            <div class="row justify-content-between text-center">
                <div class="col-md-2">
                    <a href="https://www.facebook.com/clinicbimbel/" class="text-decoration-none text-dark">
                        <i class="fab fa-facebook-f text-success display-4"></i>
                        <h5 class="fw-bold mt-2">Facebook</h5>
                        <p>Clinic Bimbel</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="https://www.instagram.com/clinicbimbel/" class="text-decoration-none text-dark">
                        <i class="fab fa-instagram text-success display-4"></i>
                        <h5 class="fw-bold mt-2">Instagram</h5>
                        <p>@clinicbimbel</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="http://wa.me/6283101065180" class="text-decoration-none text-dark">
                        <i class="fab fa-whatsapp text-success display-4"></i>
                        <h5 class="fw-bold mt-2">WhatsApp</h5>
                        <p>+62 831-0106-5180</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="text-decoration-none text-dark">
                        <i class="far fa-envelope text-success display-4"></i>
                        <h5 class="fw-bold mt-2">Email</h5>
                        <p>admin@clinicbimbel.com</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1Zg9PkI4B5YJWiCOUN2p2UBVYkMWbMN0V&hl=id"
                        class="w-100 h-100"></iframe>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mt-5 mt-md-0">Hubungi Kami</h2>
                    <h6 class="mb-4">Punya beberapa saran atau hanya ingin menyapa? Tim dukungan kami siap
                        membantu Anda 24/7.</h6>
                    <form>
                        <div class="row my-3">
                            <div class="col">
                                <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" id="inputEmail" placeholder="nama@email.com">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <input type="number" class="form-control" id="inputPhone" placeholder="Nomor HP">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="inputSubject" placeholder="Subjek">
                            </div>
                        </div>
                        <textarea class="form-control my-3" aria-label="With textarea" rows="3"></textarea>
                        <button type="submit" class="btn btn-info text-light">Kirim</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    {{-- End of Jumbotron --}}
@endsection
