<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM kamar WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
                '<script>
                alert("Reservasi kamar berhasil dihapus"); window.location = "../page/listreservasikamarPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal menghapus reservasi kamar"); window.location = "../page/listreservasikamarPage.php"
                </script>';
        }
    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>