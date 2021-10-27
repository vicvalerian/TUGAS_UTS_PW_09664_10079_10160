<?php
    if(isset($_POST['addReview'])){

        include('../db.php');

        $namaReview = $_POST['namaReview'];
        $isiReview = $_POST['isiReview'];
        $jmlBintang = $_POST['jmlBintang'];
        $email = $_POST['email'];

        $query = mysqli_query($con,
            "INSERT INTO review(namaReview, isiReview, jmlBintang, email)
                VALUES
            ('$namaReview', '$isiReview', '$jmlBintang', '$email')")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil menambahkan review"); window.location = "../page/reviewPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal menambahkan review");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>