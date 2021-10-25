@extends('base.main')

@section('container')
    {{-- Jumbotron --}}
    <section class="cover-home">
        <div class="jumbotron">
            <div class="row">
                <div class="col col-xl-4 m-auto">
                    <div class="title-welcome text-light mb-4">
                        <h1 class="fw-bold m-auto display-5">Temukan Pengajar Profesional yang tepat untukmu</h1>
                        <h5>Kami hadir untuk mencerdaskan bangsa, menciptakan generasi yang edukatif
                            dan kreatif.</h5>
                    </div>
                    <div class="cta">
                        <a class="btn btn-fb text-light me-lg-1" href="https://www.facebook.com/clinicbimbel/"
                            role="button">Facebook</a>
                        <a class="btn btn-ig text-light mx-lg-1" href="https://www.instagram.com/clinicbimbel/"
                            role="button">Instagram</a>
                        <a class="btn btn-wa text-light mx-lg-1" href="http://wa.me/6283101065180" role="button">WhatsApp</a>
                        <a class="btn btn-yt text-light ms-lg-1"
                            href="https://www.youtube.com/channel/UCuWJXJ1Tb1zewYcLOSQe5BQ" role="button">Youtube</a>
                    </div>
                </div>
                <div class="col col-xl-6 m-auto">
                    <img src="/img/tentor.png" class="w-75 p-3" alt="">
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
                    <h2 class="fw-bold mt-5 mt-md-0">Hubungi Kami</h2>
                    <h6 class="mb-4">Punya beberapa saran atau hanya ingin menyapa? Tim dukungan kami siap
                        membantu Anda 24/7.</h6>
                    <form>
                        <input type="text" class="form-control my-3" id="inputName" placeholder="Nama Lengkap">
                        <input type="email" class="form-control my-3" id="inputEmail" placeholder="nama@email.com">
                        <input type="number" class="form-control my-3" id="inputPhone" placeholder="Nomor HP">
                        <input type="text" class="form-control my-3" id="inputSubject" placeholder="Subjek">
                        <textarea class="form-control my-3" aria-label="With textarea" rows="3"
                            placeholder="Tambahkan pesan-mu disini .."></textarea>
                        <button type="submit" class="btn btn-info text-light">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    {{-- End of Jumbotron --}}
@endsection
