<?php
    if(isset($_POST['update'])){

        include('../db.php');

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $noTelp = $_POST['noTelp'];
        $tipeKamar = $_POST['tipeKamar'];
        $biayaKamar = $_POST['biayaKamar'];

        $query = mysqli_query($con, "UPDATE kamar SET nama='$nama', nik='$nik', noTelp='$noTelp', tipeKamar='$tipeKamar', biayaKamar='$biayaKamar' WHERE id='$id'") 
                    or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil mengedit reservasi kamar"); window.location = "../page/listreservasikamarPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal mengedit reservasi kamar");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>