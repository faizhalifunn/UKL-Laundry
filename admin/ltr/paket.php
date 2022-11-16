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
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include "../../koneksi.php";
                                        $qry_paket=mysqli_query($conn,"select *from paket");
                                        $no=0;
                                        while($data_paket=mysqli_fetch_array($qry_paket)){
                                        $no++;?>
                                        <tr>
                                            <th scope="row"><?=$no?></th>
                                            <td><?=$data_paket['jenis']?></td>
                                            <td>RP.<?=$data_paket['harga']?></td>
                                            <td><a style="color: #FFC207;" href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" 
                                                    <i class="m-r-10 mdi mdi-pencil"></i></a> 
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