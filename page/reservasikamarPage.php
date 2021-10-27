<?php
    session_start();
    if(!isset($_SESSION['isLogin'])){
        echo '<script>
            alert("Harus Login Terlebih Dahulu!"); window.location = "../page/login.php"
            </script>';
    }
    
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
    <title>Reservasi Kamar</title>
    <style>
        .card-img-top{
            height: 250px;
            width: 100%;
            object-fit: cover;
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
                    <div class="item"><i class="fa fa-user"></i> Profil</div>
                </a>
                <a href="reservasikamarPage.php">
                    <div class="item active"><i class="fa fa-bed"></i> Reservasi Kamar</div>
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
                <h3>List Kamar</h3>
                <hr>
                </hr>
                <div class="container">
                    <div class="d-flex">
                        <div class="card mx-3" style="width: 18rem;">
                            <img class="card-img-top"
                                src="../picture/standardroom.jpg" width="30px"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Standard Room</h5>
                                <p class="cardtext">Nikmati kenyamanan dan peroleh waktu istirahat yang cukup dengan dua 
                                    queen size bed.</p>
                            </div>
                        </div>
                        <div class="card mx-3" style="width: 18rem;">
                            <img class="card-img-top"
                                src="../picture/deluxeroom.jpg" width="30px"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Deluxe Room</h5>
                                <p class="cardtext">Dengan nuansa sejuk dan pemandangan yang menyegarkan akan membuat 
                                    anda nyaman ketika beristirahat.</p>
                            </div>
                        </div>
                        <div class="card mx-3" style="width: 18rem;">
                            <img class="card-img-top"
                                src="../picture/apartmentstyleroom.jpg" width="30px"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Apartment Style</h5>
                                <p class="cardtext">Dengan ukuran kamar yang super luas dan fasilitas yang lengkap kamar ini
                                    cocok untuk sekeluarga.</p>
                            </div>
                        </div>
                    </div>
                    <center> <a href="pesankamarPage.php" class="btn btn-primary" style="width: 300px">Pesan Kamar</a> </center>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>