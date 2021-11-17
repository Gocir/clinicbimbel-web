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
    {{-- <div class="container"> --}}
    <header class="mb-auto">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top border-bottom border-warning border-3 shadow"
            aria-label="Eleventh navbar example">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse justify-content-lg-end" id="navbarsExample09" style="">
                    <ul class="navbar-nav m-3 m-lg-0 fs-6">
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link btn btn-sm btn-light" aria-current="page" href="/"><img
                                    src="/icons/home.svg" class="ic-home" alt=""></i></a>
                        </li>
                        <li class="nav-item dropdown mx-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Private</a></li>
                                <li><a class="dropdown-item" href="#">Kelas</a></li>
                                <li><a class="dropdown-item" href="#">Online</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pendaftaran
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Siswa</a></li>
                                <li><a class="dropdown-item" href="#">Tentor</a></li>
                                <li><a class="dropdown-item" href="#">Freelancer</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="/maintenance">Blog</a>
                        </li>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-action btn fw-bold m-3 m-lg-0 ms-lg-5">Masuk/Daftar</a>
                </div>
            </div>
        </nav>
    </header>
    {{-- </div> --}}
    {{-- End of Navbar --}}
    {{-- Content --}}
    <div class="content">
        @yield('container')
    </div>
    {{-- End of Content --}}
    {{-- Footer --}}
    <footer class="mt-auto text-center text-dark-50 py-3">
        <p class="mb-0"><a href="/copyright" class="text-dark text-decoration-none">&copy;</a> 2021 Clinic
            Bimbel. All Rights
            Reserved</p>
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
