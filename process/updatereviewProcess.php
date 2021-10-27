<?php
    if(isset($_POST['update'])){

        include('../db.php');

        $idReview = $_POST['idReview'];
        $namaReview = $_POST['namaReview'];
        $isiReview = $_POST['isiReview'];
        $jmlBintang = $_POST['jmlBintang'];
        $email = $_POST['email'];
        $emailReal = $_POST['emailReal'];

        if(strpos($email, $emailReal) !== false){

            $query = mysqli_query($con, "UPDATE review SET namaReview='$namaReview', isiReview='$isiReview', jmlBintang='$jmlBintang' WHERE idReview='$idReview'") 
                    or die(mysqli_error($con));

            if($query){
                echo
                    '<script>
                    alert("Berhasil mengedit review"); window.location = "../page/reviewPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Gagal mengedit review");
                    </script>';
            }
        }
        else{
            echo
                '<script>
                alert("Tidak dapat mengedit review, review ini bukan milik anda"); window.location = "../page/reviewPage.php"
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>