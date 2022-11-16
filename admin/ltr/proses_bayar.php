<?php
include "../../koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$update=mysqli_query($conn,"UPDATE `transaksi` SET `bayar` = 'LUNAS' WHERE `transaksi`.`id_transaksi` = $id_transaksi;") or die(mysqli_error($conn));
header('location:history.php')
?>