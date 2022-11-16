<?php 
include "navbar.php";

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div> 
                    <div class="col-7">
                        <div class="text-end upgrade-btn ">
                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">User</h4>
                                        <h5 class="card-subtitle">view and edit user</h5>
                                    </div>
                                    <div class="ms-auto">
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <!-- <========================================================================TABLE USER============================================== -->
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr class="bg-light">
                                            <th scope="col">No</th>                       
                                            <th scope="col">Nama</th>
                                            <th scope="col">Petugas</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">tanggal</th>
                                            <th scope="col">Status bayar</th>
                                            <th scope="col">Proses</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                        $no=0;
                                        while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                                        $no++;
                                        $qry_join_member = mysqli_query($conn,"select * from transaksi inner join member on member.id_member = transaksi.id_member where id_transaksi ='".$data_transaksi['id_transaksi']."'");
                                        $dt_member = mysqli_fetch_array ($qry_join_member) ;
                                        $qry_join_user = mysqli_query($conn," select * from transaksi inner join user on user.id_user = transaksi.id_user where id_transaksi = '".$data_transaksi['id_transaksi']."'");
                                        $dt_user = mysqli_fetch_array($qry_join_user);
                                        $qry_join_paket = mysqli_query($conn,"select * from transaksi inner join paket on paket.id_paket = transaksi.id_paket where id_transaksi = '".$data_transaksi['id_transaksi']."'" );
                                        $dt_pket = mysqli_fetch_array ($qry_join_paket);
                                        ?>
                                        <tr>
                                            <th scope="row"><?=$no?></th>
                                            <td><?=$dt_member['nama_member']?></td>
                                            <td><?=$dt_user['username']?></td>
                                            <td><?=$dt_pket['jenis']?></td>
                                            <td><?=$data_transaksi['qty' ]?></td>
                                            <td>RP.<?=$data_transaksi['total']?></td>
                                            <td><?=$data_transaksi['tgl']?></td>
                                            <td><?php if ($data_transaksi['bayar']=="LUNAS"){
                                                ?>
                                                    <h5 style="color:green ;" class="m-b-0 user-name font-medium"> <?=$data_transaksi['bayar']?> 
                                            <?php }
                                            elseif ($data_transaksi['bayar']=="BELUM"){ 
                                                    ?>
                                                    <a style="color:crimson ;" href="#" class="" id="Userdd" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 style="color:crimson ;" class="m-b-0 user-name font-medium"> <?=$data_transaksi['bayar']?> <i
                                                            class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" >
                                                    
                                                        <a  class="dropdown-item" href="proses_bayar.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>">LUNAS</a> <?php } ?>
                                                
                                            <td> <?php if ($data_transaksi['status']=="diambil"){
                                                ?>
                                                    <h5 style="color:green ;" class="m-b-0 user-name font-medium"> <?=$data_transaksi['status']?> 
                                            <?php }
                                            elseif ($data_transaksi['status']=="selesai"){ 
                                                    ?>
                                                    <a style="color:yellow ;" href="#" class="" id="Userdd" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 style="color:yellow ;" class="m-b-0 user-name font-medium"> <?=$data_transaksi['status']?> <i
                                                            class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" >
                                                    
                                                        <a  class="dropdown-item" href="proses_diambil.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>">Diambil</a> <?php } 
                                            elseif ($data_transaksi['status']=="proses"){ ?>
                                                    <a style="color: darkred;" href="#" class="" id="Userdd" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5  class="m-b-0 user-name font-medium"> <?=$data_transaksi['status']?> <i
                                                            class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" >
                                                        
                                                        <a class="dropdown-item" href="proses_selesai.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>"">Selesai</a>
                                                        <a class="dropdown-item" href="proses_diambil.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>"">Diambil</a> <?php }
                                            elseif ($data_transaksi['status']=="baru"){ ?>
                                                    <a href="#" class="" id="Userdd" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <h5 class="m-b-0 user-name font-medium"> <?=$data_transaksi['status']?> <i
                                                                    class="fa fa-angle-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" >
                                                                <a class="dropdown-item" href="proses_proses.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>">Proses</a>
                                                                <a class="dropdown-item" href="proses_selesai.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>"">Selesai</a>
                                                                <a class="dropdown-item" href="proses_diambil.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>"">Diambil</a> <?php } ?>
                                            

                                            

                                                    
                                                
                                            </td>
                                        <td><a style="color: red;" href="hapus_history.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"
                                                    <i class="m-r-10 mdi mdi-delete"></i></a> 
                                            <a style="color:gold;" href="laporan.php" target="_blank" onclick=""id_transaksi=<?=$data_transaksi['id_transaksi']?>"> 
                                                    <i class="m-r-10 mdi mdi-receipt"></i></a></td>
                                        </tr>
                                        
                                        
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div> </br></br>
                            
                            <!-- <========================================================================END TABLE USER============================================== -->
                            
                            <!-- <========================================================================TABLE MEMBER============================================== -->
                                    
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <?php include"footer.php" ?>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>