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
                <a class="navbar-brand mx-lg-auto" style="width: 240px" href="/">
                    <img src="/img/Logo.png" class="w-50" alt="">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse justify-content-lg-end" id="navbarsExample09" style="">
                    <ul class="navbar-nav m-3 m-lg-0 fs-6">
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="/maintenance">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="/maintenance">Blog</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link" href="/contact">Hubungi Kami</a>
                            {{-- <hr class="m-0 mx-lg-auto"> --}}
                        </li>
                    </ul>
                    <a href="#" class="btn btn-info text-light btn-lg fs-6 m-3 m-lg-0 ms-lg-5">Daftar</a>
                </div>
            </div>
        </nav>
    </div>
    {{-- End of Navbar --}}
    {{-- Content --}}
    <div class="content">
        @yield('container')
    </div>
    {{-- End of Content --}}
    {{-- Footer --}}
    <footer>
        <p class="text-center text-dark-50 py-5 mb-0">&copy; 2021 Clinic Bimbel. All Rights Reserved</p>
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
