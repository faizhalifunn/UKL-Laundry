<?php 
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];

    
    
    if (empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_paket.php';</script>";
    }  else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"UPDATE `paket` SET `harga`='$harga' where id_paket = '$id_paket'") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('success edit');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('failed edit');location.href='paket.php';</script>";
        }

    }
}

?>