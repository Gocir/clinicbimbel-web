<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Clinic Bimbel</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent rounded" aria-label="Eleventh navbar example">
            <div class="container-fluid">
                <a class="navbar-brand mx-lg-auto w-25" href="/">
                    <img src="/img/Logo.png" class="w-50" alt="">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse justify-content-lg-end" id="navbarsExample09" style="">
                    <ul class="navbar-nav m-3 m-lg-0 fs-5">
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                            <hr class="m-0 mx-lg-auto">
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="#contact-us">About</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="#contact-us">Blog</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="#contact-us">Contact</a>
                        </li>
                    </ul>
                    <a href="#contact-us" class="btn btn-success btn-lg fs-5 m-3 m-lg-0 ms-lg-5">Sign
                        Up</a>
                </div>
            </div>
        </nav>
    </div>
    {{-- End of Navbar --}}
    {{-- Jumbotron --}}
    <div class="container">
        <section class="jumbotron">
            <div class="row">
                <div class="col-8 col-md-6 offset-md-3 col-lg-4 offset-lg-0 col-xl-4 offset-xl-0 my-auto">
                    <div class="content">
                        <p class="fw-bold m-auto" style="font-size: 6vw">Oops!</p>
                        <p class="fw-bold mb-0" style="font-size: 2vw">Under construction</p>
                        <p style="font-size: 1vw">Website is still under construction, sorry for the inconvenience.
                        </p>
                    </div>
                    <div class="cta">
                        <a class="btn btn-success" href="#contact-us" role="button">More
                            Info</a>
                    </div>
                    {{-- <h1 class="fw-bold">Find the right Professional Mentor for you</h1>
                        <p>Various topics, skill levels or languages, Join the Thousands of Learners in Indonesia Who Have
                            Been
                            Studying
                            at the Clinic Bimbel.</p> --}}
                </div>
                <div class="col-12 col-md-12 col-lg-8 col-xl-8 my-auto text-center">
                    <img src="/img/Under-construct-2x.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>
    </div>
    {{-- End of Jumbotron --}}
    {{-- Footer --}}
    <footer id="contact-us" class="container-fluid bg-success rounded-bottom" style="border-radius: 80px">
        <div class="container d-flex flex-wrap text-white py-md-3 py-4">
            <div class="flex-shrink-0">
                <i class="fab fa-facebook-square"></i>
            </div>
            <div class="flex-grow-1 ms-md-3 ms-1">
                <a href="https://www.facebook.com/clinicbimbel/">Clinic Bimbel</a>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="flex-shrink-0">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="flex-grow-1 ms-md-3 ms-1">
                <a href="https://www.instagram.com/clinicbimbel/">@clinicbimbel</a>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="flex-shrink-0">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="flex-grow-1 ms-md-3 ms-1">
                <a href="http://wa.me/6283101065180">62 83101065180</a>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="flex-shrink-0">
                <i class="far fa-envelope"></i>
            </div>
            <div class="flex-xs-grow-1 ms-md-3 ms-1">
                Clinicbimbel@gmail.com
            </div>
        </div>
        <p class="text-center text-white-50 py-3 mb-0">&copy; 2021 Clinic Bimbel. All Rights Reserved</p>
    </footer>
    {{-- End of Footer --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>
-->
</body>

</html>
