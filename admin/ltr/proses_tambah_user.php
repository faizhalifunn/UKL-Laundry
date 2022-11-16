<?php 
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $password= $_POST['password'];
    
    
    if (empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($password)){
        echo "<script>alert('password tidak boleh kosong ');location.href='tambah_user.php';</script>";
    } elseif (empty($role)){
        echo "<script>alert('level tidak boleh kosong ');location.href='tambah_user.php';</script>";
    }else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `user`(`nama`, `username`, `role`,`password`) VALUES ('".$nama."','".$username."','".$role."','".md5($password)."')") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('sukses menambahkan user');location.href='user.php';</script>";
        } else {
            echo "<script>alert('gagal menambahkan user');location.href='tambah_user.php';</script>";
        }

    }
}

?>
     