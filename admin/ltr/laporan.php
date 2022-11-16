
<!DOCTYPE html>
<html>
<head>
	<title>PEMBAYARAN</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Laundry</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
	
</head>
<body style="padding:100px;">
	<h3 align="center">NIGHTDRY<b><br/>STRUK PEMBAYARAN</b></h3>
	<br/>
	<hr/>
	<?php 

    include "../../koneksi.php";
    $qry_member =mysqli_query($conn,"select * FROM member");
    $data_member = mysqli_fetch_array($qry_member);
    $qry_user =mysqli_query($conn, "select * FROM user");
    $data_user = mysqli_fetch_array($qry_user);
    $qry_paket = mysqli_query($conn, "select * from paket");
    $data_paket = mysqli_fetch_array($qry_paket);
    $qry_transaksi = mysqli_query($conn ," select * from transaksi");
    $qry_paket=mysqli_query($conn,"select *from paket");   
    $data_transaksi=mysqli_fetch_array($qry_transaksi);
    $qry_join_member = mysqli_query($conn,"select * from transaksi inner join member on member.id_member = transaksi.id_member where id_transaksi ='".$data_transaksi['id_transaksi']."'");
    $dt_member = mysqli_fetch_array ($qry_join_member) ;
    $qry_join_user = mysqli_query($conn," select * from transaksi inner join user on user.id_user = transaksi.id_user where id_transaksi = '".$data_transaksi['id_transaksi']."'");
    $dt_user = mysqli_fetch_array($qry_join_user);
    $qry_join_paket = mysqli_query($conn,"select * from transaksi inner join paket on paket.id_paket = transaksi.id_paket where id_transaksi = '".$data_transaksi['id_transaksi']."'" );
    $dt_pket = mysqli_fetch_array ($qry_join_paket);
    ?>

	
	<table>
		<tr>
			<td>Nama Member </td>
			<td>:</td>
			<td> <?= $dt_member['nama_member'] ?></td>
		</tr>
		<tr>
			<td>Tgl</td>
			<td>:</td>
			<td> <?= $data_transaksi['tgl'] ?></td>
		</tr>
	</table>
	<hr>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>ID PEMBAYARAN</th>
        <th>WAKTU MASUK</th>
		<th>NAMA</th>
        <th>KASIR</th>
		<th>JENIS</th>
		<th>HARGA</th>
        <th>JUMLAH</th>
        <th>TOTAL</th>
        <th>KETERANGAN</th>
        <th>STATUS</th>
	</tr>
	<?php 
	$i=1;
	$total = 0;
	?>
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $data_transaksi['id_transaksi'] ?></td>
        <td align="center"><?= $data_transaksi['tgl'] ?></td>
        <td align="center"><?=$dt_member['nama_member']?></td>
		<td align="center"><?=$dt_user['nama']?></td>
        <td align="center"><?=$dt_pket['jenis']?></td>
		<td align="center"><?= $dt_pket['harga'] ?></td>
		<td align="center"><?=$dt_pket['qty']?></td>
        <td align="center"><?=$data_transaksi['total']?></td>
        <td align="center"><?=$data_transaksi['bayar']?></td>
        <td align="center"><?=$data_transaksi['status']?></td>
	</tr>
	

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Malang , <?= date('d/m/y') ?> <br/>
				PETUGAS,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	

	

	<div class="form-group">
                                        <div class="col-sm-12">
                                            <a  href="#" target="" onclick="window.print();"><button class="print">CETAK</button></a>
                                        </div>
                                    </div>

									<script>

window.onload = function(){
	 window.open(url, "_blank"); // will open new tab on window.onload
}
</script>



</body>
</html>