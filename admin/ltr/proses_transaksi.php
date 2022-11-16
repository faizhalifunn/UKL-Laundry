<?php 

if($_POST){
    $id_member=$_POST['id_member'];
    $id_paket=$_POST['id_paket'];
    $qty=$_POST['qty'];
    $bayar=$_POST['bayar'];
    $tgl = date ('Y-m-d');
    $id_user =$_POST ['id_user'];
    
    
    if (empty($id_member)){
        echo "<script>alert('member tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif (empty($id_paket)){
        echo "<script>alert('paket tidak boleh kosong');location.href=' transaksi.php';</script>";
    } elseif (empty($bayar)){
        echo "<script>alert('harap isi status bayar ');location.href='  transaksi.php';</script>";
    } elseif (empty($qty)){
        echo "<script>alert('Harap masukkan jumlah paket ');location.href='transaksi.php';</script>";
    }else {
        include "../../koneksi.php";
        
        $qry=mysqli_query($conn,"SELECT * FROM `paket` WHERE id_paket = $id_paket ;");
        $data=mysqli_fetch_array($qry);
        $total= $qty * $data['harga'];
        if ($total <= 15000 ){
            $total = 15000;
        }

        $insert=mysqli_query($conn,"INSERT INTO `transaksi`( `id_member`, `id_paket`,`id_user`, `qty`, `tgl`, `status`, `bayar`,`total`) VALUES ('".$id_member."','".$id_paket."','".$id_user."','".$qty."','".$tgl."','baru','".$bayar."','".$total."')") or die(mysqli_error($conn));
        if ($insert){
            echo "<script>alert('sukses menambahkan');location.href='history.php';</script>";
        } else {
            echo "<script>alert('gagal menambahkan');location.href='transaksi.php';</script>";
        }

    }
}

?>
