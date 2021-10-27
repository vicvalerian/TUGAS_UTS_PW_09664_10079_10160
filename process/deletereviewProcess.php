<?php

    session_start();
    if($_GET['emailReal'] != $_SESSION['email']){
        echo
            '<script>
            alert("Tidak dapat menghapus review, review ini bukan milik anda"); window.location = "../page/reviewPage.php"
            </script>';
    }
    else{
        if(isset($_GET['idReview'])){
        
            include ('../db.php');
            
            $idReview = $_GET['idReview'];
            $queryDelete = mysqli_query($con, "DELETE FROM review WHERE idReview='$idReview'") or die(mysqli_error($con));
            if($queryDelete){
                echo
                    '<script>
                    alert("Berhasil menghapus review"); window.location = "../page/reviewPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Gagal menghapus review"); window.location = "../page/reviewPage.php"
                    </script>';
            }      
        }else {
            echo
                '<script>
                window.history.back()
                </script>';
        }
    }
?>