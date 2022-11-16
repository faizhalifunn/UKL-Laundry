<?php
    if($_GET['id_paket']){
        include "../../koneksi.php";
            $conn=mysqli_connect('localhost','root','','laundry');
            $qry_hapus=mysqli_query($conn,"DELETE FROM paket WHERE id_paket = '".$_GET['id_paket']."'");
          if($qry_hapus) {
                echo "<script>alert ('Sukses hapus');location.href='paket.php';</script>";
        } else {
                echo "<script>alert ('Gagal hapus');location.href='paket.php';</script>";
        }
    }
?>