<?php 
if($_POST){
    $nama_ot=$_POST['nama_ot'];
    $alamat_ot=$_POST['alamat_ot'];
    $telp=$_POST['telp'];
    $id_outlet=$_POST['id_outlet'];
    
    
    
    if (empty($nama_ot)){
        echo "<script>alert('harap isi nama cabang ');location.href='ubah_ot.php';</script>";
    } elseif (empty($alamat_ot)){
        echo "<script>alert('harap isi alamat');location.href='ubah_ot.php';</script>";
    } elseif (empty($telp)){
        echo "<script>alert('Harap mengisi nomor telepon');location.href='ubah_ot.php';</script>";
    } else {
        include "../../koneksi.php";
        $insert=mysqli_query($conn,"UPDATE `outlet` SET `nama_ot`='$nama_ot',`alamat_ot`='$alamat_ot',`telp`='$telp' where id_outlet = '$id_outlet'") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('success add user');location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('failed add user');location.href='ubah_ot.php';</script>";
        }

    }
}

?>
     