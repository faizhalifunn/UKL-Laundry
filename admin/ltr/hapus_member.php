<?php
    if($_GET['id_member']){
        include "../../koneksi.php";
            $conn=mysqli_connect('localhost','root','','laundry');
            $qry_hapus=mysqli_query($conn,"DELETE FROM member WHERE id_member = '".$_GET['id_member']."'");
          if($qry_hapus) {
                echo "<script>alert ('Sukses hapus member');location.href='user.php';</script>";
        } else {
                echo "<script>alert ('Gagal hapus member');location.href='user.php';</script>";
        }
    }
?>