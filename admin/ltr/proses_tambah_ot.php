<?php 
if($_POST){
    $nama_ot=$_POST['nama_ot'];
    $alamat_ot=$_POST['alamat_ot'];
    $telp=$_POST['telp'];
    
    
    if (empty($nama_ot)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_ot.php';</script>";
    } elseif (empty($alamat_ot)){
        echo "<script>alert('alamat outlet tidak boleh kosong');location.href='tambah_ot.php';</script>";
    } elseif (empty($telp)){
        echo "<script>alert('telepon tidak boleh kosong ');location.href='tambah_ot.php';</script>";
    } else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `outlet`(`nama_ot`, `alamat_ot`, `telp`) VALUES ('".$nama_ot."','".$alamat_ot."','".$telp."')") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('sukses menambahkan outlet');location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('gagal menambahkan outlet');location.href='tambah_ot.php';</script>";
        }

    }
}

?>
     