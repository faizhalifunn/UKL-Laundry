<?php
    if($_GET['id_transaksi']){
        include "../../koneksi.php";
            $conn=mysqli_connect('localhost','root','','laundry');
            $qry_hapus=mysqli_query($conn,"DELETE FROM transaksi WHERE id_transaksi = '".$_GET['id_transaksi']."'");
        header('location: history.php');
    }
?>