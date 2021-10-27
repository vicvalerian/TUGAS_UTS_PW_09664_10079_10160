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
                <div class="container">
                    <div class="container p-3 m-4 h-100"
                        style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <h4>PESAN KAMAR</h4>
                        <hr>
                        <form action="../process/pesankamarProcess.php" method="post">
                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK</label>
                                <input class="form-control" id="nik" name="nik" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                <input class="form-control" id="noTelp" name="noTelp" aria-describedby="emailHelp" pattern="[0][8][0-9]{8,10}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                                <select class="form-select" aria-label="Default select example" name="tipeKamar" id="tipeKamar" required onchange="getBiaya()">
                                    <option selected disabled value="">Pilih Tipe Kamar</option>
                                    <option value="Standard Room">Standard Room</option>
                                    <option value="Deluxe Room">Deluxe Room</option>
                                    <option value="Apartment Style">Apartment-Style</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Biaya Hotel</label>
                                <input type="text" id="biayaKamar" name="biayaKamar" hidden>
                                <input class="form-control" id="showbiayaKamar" aria-describedby="emailHelp" disabled>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="register">Pesan Kamar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
    <script>
        function getBiaya() {
            var mylist = document.getElementById("tipeKamar").value;

            if(mylist == "Standard Room"){
                document.getElementById("biayaKamar").value = "300000";
                document.getElementById("showbiayaKamar").value = "300000";
            }
            else if(mylist == "Deluxe Room"){
                document.getElementById("biayaKamar").value = "400000";
                document.getElementById("showbiayaKamar").value = "400000";
            }
            else if(mylist == "Apartment Style"){
                document.getElementById("biayaKamar").value = "500000";
                document.getElementById("showbiayaKamar").value = "500000";
            }
        }
    </script>
</body>

</html>