<?php 
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $password= $_POST['password'];
    $telepon=$_POST['telepon'];
    $id_member=$_POST['id_member'];
    
    
    if (empty($nama_member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($password)){
        echo "<script>alert('password tidak boleh kosong ');location.href='tambah_member.php';</script>";
    } elseif (empty($jenis_kelamin)){
        echo "<script>alert('kelamin tidak boleh kosong ');location.href='tambah_member.php';</script>";
    }elseif (empty($telepon)){
        echo "<script>alert('nomor tidak boleh kosong ');location.href='tambah_member.php';</script>";
    }else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"UPDATE `member` SET `nama_member`='$nama_member',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`telepon`='$telepon' where id_member = '$id_member'") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('sukses update member');location.href='user.php';</script>";
        } else {
            echo "<script>alert('gagal update member');location.href='tambah_member.php';</script>";
        }

    }
}

?>
     