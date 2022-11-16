<?php 
include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry_login= mysqli_query($conn,"select * from user where username='".$username."' and password='".md5($password)."'");
    $cek = mysqli_num_rows($qry_login);

    if(mysqli_num_rows($qry_login) > 0){
        // ! baris 12 karena kita tidak mau menampilkan data
        $data = mysqli_fetch_assoc($qry_login);
        // $dt_login=mysqli_fetch_array($qry_login);
        session_start();
        
        $_SESSION['status_login']=true;
            if ($data['role']=="admin"){
                $_SESSION['username']=$username;
                $_SESSION['level']="admin";
                header("location:a../../admin/ltr");
            }

            elseif ($data['role']=="kasir"){
                $_SESSION['username']=$username;
                $_SESSION['level']="kasir";
                header("location:a../../kasir/ltr");
            }

        
            else{
            header("location:index.php?pesan=gagal");
            }
        }   
        else{
        header("location:index.php?pesan=gagal");
        }


?>