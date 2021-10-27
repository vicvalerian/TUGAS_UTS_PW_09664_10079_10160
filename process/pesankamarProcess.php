<?php
    if(isset($_POST['register'])){

        include('../db.php');

        $nama = $_POST['nama'];
        $npm = $_POST['nik'];
        $noTelp = $_POST['noTelp'];
        $tipeKamar = $_POST['tipeKamar'];
        $biayaKamar = $_POST['biayaKamar'];
        $email = $_POST['email'];

        $query = mysqli_query($con,
            "INSERT INTO kamar(nama, nik, noTelp, tipeKamar, biayaKamar, email)
                VALUES
            ('$nama', '$npm', '$noTelp', '$tipeKamar', '$biayaKamar', '$email')")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil menambahkan reservasi kamar"); window.location = "../page/listreservasikamarPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal menambahkan reservasi kamar");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>