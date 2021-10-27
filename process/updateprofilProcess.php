<?php
    if(isset($_POST['update'])){

        include('../db.php');

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $username = $_POST['username'];

        $query = mysqli_query($con, "UPDATE users SET nama='$nama', notelp='$notelp', username='$username' WHERE id='$id'") 
                    or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil mengedit profil"); window.location = "../page/profilPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal mengedit profil");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>