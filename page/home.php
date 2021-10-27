<?php
    session_start();
    if(isset($_SESSION['isLogin'])){
        echo "<script>location='../page/profilPage.php';</script>";
    }else {
        echo 'Silahkan Login Dulu <a href="../page/login.php">login</a>';        
    }
?>


