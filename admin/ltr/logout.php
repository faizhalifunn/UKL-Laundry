<?php 
 session_start();
    unset($_SESSION['nama']);
    unset($_SESSION['username']);
    unset($_SESSION['status_login']);
    unset($_SESSION['level']);
 session_destroy();
header("Location:../../index.php");
?>