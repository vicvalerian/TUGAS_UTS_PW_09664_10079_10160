<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />

    <title>Register</title>
</head>

<body>
    <div class="container-fluid">


        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="card card-login mx-auto" style="height:100vh">
                        <div class=" card-header">
                            <center>
                                <img src="../picture/logo.png" alt="" height="70px">
                                <h4>Selamat Datang!</h4>
                                <p>Silahkan mengisi data untuk mendaftar.</p>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="../process/registerProses.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input class="form-control" name="notelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input class="form-control" name="email" type="email" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input class="form-control" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="password" type="password" required>
                                </div>

                                <div class="row mt-30">
                                    <button class="btn btn-primary" type="submit" name="register">Register</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <a class="d-block small mt-3" href="../page/login.php">Login</a>
                                <a class="d-block small mt-3" href="../">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 m-auto" style="padding: 0px;">
                <section id="banner2">
                    <img src="../picture/hotel.jpg" alt="" style="height: 100vh; object-fit: cover;">
                </section>
            </div>
        </div>




    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>