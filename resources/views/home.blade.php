<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Clinic Bimbel</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparant fs-5" style="height: 120px">
            <div class="container">
                <a class="navbar-brand mx-auto py-0" href="/">
                    <img src="/img/Logo.png" class="py-4" style="max-height:120px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="nav navbar-nav">
                        <a class="nav-link text-secondary me-3" aria-current="page" href="#">Home</a>
                        <a class="nav-link text-secondary mx-3" href="#">About</a>
                        <a class="nav-link text-secondary mx-3" href="#">Blog</a>
                        <a class="nav-link text-success mx-3 active" href="#">Contact</a>
                        <button type="button" class="btn btn-success btn-lg fs-6 ms-3" style="border-radius: 15px">Sign
                            Up</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- End of Navbar --}}
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <div class="container my-5">
            <div class="row g-0">
                <div class="col-5 my-auto">
                    <div class="content mb-4">
                        <p class="title">Oops!</p>
                        <p class="sub-title">Under construction</p>
                        <p>Website is still under construction, sorry for the inconvenience.
                        </p>
                    </div>
                    {{-- <h1 class="fw-bold">Find the right Professional Mentor for you</h1>
                    <p>Various topics, skill levels or languages, Join the Thousands of Learners in Indonesia Who Have Been
                        Studying
                        at the Clinic Bimbel.</p> --}}
                    <a class="btn btn-success btn-lg" style="border-radius: 15px" href="#" role="button">More Info</a>
                </div>
                <div class="col mx-4">
                    <img src="/img/Under-construct-2x.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        {{-- <div class="row"></div> --}}
    </section>
    {{-- End of Jumbotron --}}

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
