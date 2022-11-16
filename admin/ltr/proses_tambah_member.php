<?php 
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin']; 
    $telepon=$_POST['telepon'];
    
    if (empty($nama_member)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    }  elseif (empty($jenis_kelamin)){
        echo "<script>alert('kelamin tidak boleh kosong ');location.href='tambah_member.php';</script>";
    }elseif (empty($telepon)){
        echo "<script>alert('nomor tidak boleh kosong ');location.href='tambah_member.php';</script>";
    }else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `member`(`nama_member`, `alamat`, `jenis_kelamin`, `telepon`) VALUES ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$telepon."')") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('sukses menambahkan member');location.href='user.php';</script>";
        } else {
            echo "<script>alert('gagal menambahkan member');location.href='tambah_member.php';</script>";
        }

    }
}

?>
     