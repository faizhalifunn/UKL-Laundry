<?php
    if($_GET['id_transaksi']){
        include "../../koneksi.php";
            $conn=mysqli_connect('localhost','root','','laundry');
            $qry_proses=mysqli_query($conn,"UPDATE `transaksi` SET `status` = 'selesai' WHERE `transaksi`.`id_transaksi` = '".$_GET['id_transaksi']."'");
            header('location:history.php');
    }
?>