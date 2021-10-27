<?php
    session_start();
    if(!isset($_SESSION['isLogin'])){
        echo '<script>
            alert("Harus Login Terlebih Dahulu!"); window.location = "../page/login.php"
            </script>';
    } 

    include '../db.php';

    $email = $_SESSION['email'];
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
    <title>Profil</title>
    <style>
        .box{
            padding: 25px;
            border: 2px solid #FD4F00;
            border-radius: 10px;
            max-width: 700px;
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
                    <p class="title">Profil</p>
                    <hr>
                    </hr>
                    <center>
                        <div class="box">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td rowspan="4"> <img src="../picture/user.png" alt="User Profile" width="150px" height="150px"> </td>
                                        <th scope="col">Nama</th>
                                        <td> <?php echo $u['nama'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nomor Telpon</th>
                                        <td> <?php echo $u['notelp'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <td> <?php echo $u['email'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <td> <?php echo $u['username'] ?> </td>
                                    </tr>
                                </thead>
                            </table>  
                            <a href="../page/updateprofilPage.php" class="btn btn-primary" style="width: 300px">Update Profil</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>