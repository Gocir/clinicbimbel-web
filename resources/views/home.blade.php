@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <section class="cover-home">
        <div class="container">
            <div class="jumbotron">
                <div class="row py-4 m-auto">
                    <div class="col-xl-5 col-md-5 order-2 order-sm-0 ms-md-4 my-auto">
                        <div class="title-welcome text-light mb-4">
                            <h1 class="fw-bold m-auto display-6">Belajar bersama Pengajar Profesional yang tepat untukmu</h1>
                            <h6>Kami hadir untuk mencerdaskan bangsa, menciptakan generasi yang edukatif
                                dan kreatif.</h6>
                        </div>
                        <div class="cta">
                            <a class="btn btn-fb text-light me-lg-1" href="https://www.facebook.com/clinicbimbel/"
                                role="button">Facebook</a>
                            <a class="btn btn-ig text-light mx-lg-1" href="https://www.instagram.com/clinicbimbel/"
                                role="button">Instagram</a>
                            <a class="btn btn-wa text-light mx-lg-1" href="http://wa.me/6283101065180"
                                role="button">WhatsApp</a>
                            <a class="btn btn-yt text-light ms-lg-1"
                                href="https://www.youtube.com/channel/UCuWJXJ1Tb1zewYcLOSQe5BQ" role="button">Youtube</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-5 order-1 order-sm-0 m-auto">
                        <img src="/img/tentor.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1Zg9PkI4B5YJWiCOUN2p2UBVYkMWbMN0V&hl=id"
                        class="w-100"></iframe>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mt-5 mt-md-0 text-light">Hubungi Kami</h2>
                    <h6 class="mb-4 text-light">Punya beberapa saran atau hanya ingin menyapa? Tim dukungan kami siap
                        membantu Anda 24/7.</h6>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputFullName" class="form-label text-light">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label text-light">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage" class="form-label text-light">Pesan</label>
                            <textarea class="form-control" aria-label="With textarea" rows="3"
                                placeholder="Tambahkan pesan-mu disini .."></textarea>
                        </div>
                        <button type="submit" class="btn btn-action fw-bold">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    {{-- End of Jumbotron --}}
@endsection
