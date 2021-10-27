<?php
    session_start();
    if(!$_SESSION['isLogin']){
        echo '<script>
            alert("Harus Login Terlebih Dahulu!"); window.location = "../page/login.php"
            </script>';
    }

    include '../db.php';

    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
    $u = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Update Profil</title>
    <style>
        .box{
            padding: 25px;
            border: 2px solid #FD4F00;
            border-radius: 10px;
            max-width: 750px;
        }

        .table td, .table th{
            border: none;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="sidebar">
            <div class="header">
                <a href="../"> <img src="../picture/SOJIN Hotels.png" alt="Sojin Hotels" width="200px" height="150px"> </a>
            </div>
            <div class="body">
                <a href="profilPage.php">
                    <div class="item active"><i class="fa fa-user"></i> Profil</div>
                </a>
                <a href="reservasikamarPage.php">
                    <div class="item"><i class="fa fa-bed"></i> Reservasi Kamar</div>
                </a>
                <a href="listreservasikamarPage.php">
                    <div class="item"><i class="fa fa-list-ul"></i> List Reservasi Kamar</div>
                </a>
                <a href="reviewPage.php">
                    <div class="item"><i class="fa fa-star"></i> Review Hotel</div>
                </a>
                <a href="../process/logoutProcess.php">
                    <div class="item"><i class="fa fa-sign-out"></i> Log Out </div>
                </a>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <div class="hamburger" onclick="toogleSidebar()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="body">
                <div class="container">
                    <p class="title">Update Profil</p>
                    <hr>
                    </hr>
                    <center>
                        <div class="box">
                            <form action="../process/updateprofilProcess.php" method="post" class="row">
                                    <div class="col-md-6">
                                        <img src="../picture/user.png" alt="User Profile" width="300px" height="300px" style="margin-top:45px">
                                    </div>
                                    <div class="col-md-6">
                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required
                                                    value="<?php echo $u['nama'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                                <input class="form-control" id="notelp" name="notelp" aria-describedby="emailHelp" pattern="[0][8][0-9]{8,10}" required
                                                    value="<?php echo $u['notelp'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                                    value="<?php echo $u['email'] ?>" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                                <input class="form-control" id="username" name="username" aria-describedby="emailHelp" required
                                                    value="<?php echo $u['username'] ?>">
                                            </div>   
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" name="update" style="margin-top:20px">Update</button>
                                    </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>