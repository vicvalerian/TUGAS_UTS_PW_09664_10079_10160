<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Sojin Hotels</title>
    <style>
        .home img {
            height: 100vh !important;
            width: 100% !important;
            object-fit: cover;
        }

        .home .carousel-caption {
            transform: translateY(-50%);
            bottom: initial;
            top: 50%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0, 0.1)">
        <div class="container-fluid">
            <a class="navbar-brand" href=""> <img src="./picture/SOJIN Hotels.png" alt="Sojin Hotels"
                    width="80px" height="80px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin: 0 0 0 auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/profilPage.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/reservasikamarPage.php">Reservasi Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/reviewPage.php">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/register.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide home" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./picture/picture1.jpg" class="d-block w-100" alt="Gambar1" style="height: 80%" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>SOJIN HOTELS</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./picture/picture2.jpg" class="d-block w-100" alt="Gambar2" style="height: 80%" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>SOJIN HOTELS</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./picture/picture3.jpg" class="d-block w-100" alt="Gambar3" style="height: 80%" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>SOJIN HOTELS</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div data-aos="fade-up">
        <center>
            <h1 style="margin-top: 40px">Selamat Datang</h1>
            <p>Sojin Hotel siap melayani anda dengan senang hati</p>
            <a href="./page/aboutusPage.php" type="button" class="btn btn-danger btn-lg">Tentang Kami</a>
        </center>
    </div>
    
    <div data-aos="fade-up">
        <center>
            <h1 style="margin-top: 70px">Our Location</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0922509789057!2d110.41210481475589!3d-7.7800429943931055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5788a7536bf3%3A0x2ad64bfe394b9c11!2sSahid%20Jaya%20Hotel%20%26%20Convention%20Yogyakarta!5e0!3m2!1sid!2sid!4v1634564326281!5m2!1sid!2sid" width="800" height="450" style="border:0; margin-top:30px" allowfullscreen="" loading="lazy"></iframe>
        </center>
    </div>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>