<?php 
$conn = mysqli_connect('localhost','root','','laundry');

if (mysqli_connect_error()){
    printf("koneksi error \n", mysqli_connect_error());
    exit();
}
?>