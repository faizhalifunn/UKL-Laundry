<?php 
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $password= $_POST['password'];
    $id_user=$_POST['id_user'];
    
    
    if (empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_user.php';</script>";
    } elseif (empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_user.php';</script>";
    } elseif (empty($password)){
        echo "<script>alert('password tidak boleh kosong ');location.href='ubah_user.php';</script>";
    } elseif (empty($role)){
        echo "<script>alert('level tidak boleh kosong ');location.href='ubah_user.php';</script>";
    }else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"UPDATE `user` SET `nama`='$nama',`username`='$username',`role`='$role', `password`= md5('$password') where id_user = '$id_user'") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('success add user');location.href='user.php';</script>";
        } else {
            echo "<script>alert('failed add user');location.href='ubah_user.php';</script>";
        }

    }
}

?>
     