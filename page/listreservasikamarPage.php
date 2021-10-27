<?php
    session_start();
    if(!$_SESSION['isLogin']){
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
                    <div class="item"><i class="fa fa-bed"></i> Reservasi Kamar</div>
                </a>
                <a href="listreservasikamarPage.php">
                    <div class="item active"><i class="fa fa-list-ul"></i> List Reservasi Kamar</div>
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
                <div class="container p-3 m-4 h-100"
                    style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <h4>LIST PESANAN KAMAR</h4>
                    <hr>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('../db.php');

                                $query = mysqli_query($con, "SELECT * FROM kamar WHERE email='$u[email]'") or die(mysqli_error($con));

                                if (mysqli_num_rows($query) == 0) {
                                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                                }else{
                                    $no = 1;
                                    while($data = mysqli_fetch_assoc($query)){
                                        if(strpos($data['email'], $u['email']) !== false){
                                            echo'
                                            <tr>
                                                <th scope="row">'.$no.'</th>
                                                <td>'.$data['nama'].'</td>
                                                <td>'.$data['nik'].'</td>
                                                <td>'.$data['noTelp'].'</td>
                                                <td>'.$data['tipeKamar'].'</td>
                                                <td>Rp. '.$data['biayaKamar'].'</td>
                                                <td>
                                                    <a href="./updatekamarPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                                    <a href="../process/deletekamarProcess.php?id='.$data['id'].'"
                                                        onClick="return confirm ( \'Yakin ingin menghapus data?\')">
                                                        <i style="color: red" class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>';
                                        $no++;
                                        }
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>