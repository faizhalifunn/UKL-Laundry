<?php 
include "navbar.php";
?>
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
                        <h4 class="page-title">Transaksi</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">transaksi</li>
                                </ol>
                            </nav>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="proses_transaksi.php" method="POST" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                    <div class="form-group">
                                            <label class="col-sm-12">Nama</label>
                                            <div class="col-sm-12">
                                                <select name="id_member" id="id_member" class="form-select shadow-none form-control-line" >
                                                <option>-</option>
                                                <?php 
                                                include "../../koneksi.php";
                                                $qry_member=mysqli_query($conn,"select * from member");
                                                while($data_member=mysqli_fetch_array($qry_member)){
                                                    echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';   
                                                }
                                                ?>                                                    
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="col-sm-12">Jenis Paket</label>
                                            <div class="col-sm-12">
                                                <select name="id_paket" id="id_paket" class="form-select shadow-none form-control-line" >
                                                <option>-</option>
                                                <?php 
                                                include "../../koneksi.php";
                                                $qry_paket=mysqli_query($conn,"select * from paket");
                                                while($data_paket=mysqli_fetch_array($qry_paket)){
                                                    echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';   
                                                }
                                                ?>      
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">User</label>
                                            <div class="col-sm-12">
                                                <select name="id_user" id="id_user" class="form-select shadow-none form-control-line" >
                                                <option>-</option>
                                                <?php 
                                                include "../../koneksi.php";
                                                $qry_user=mysqli_query($conn,"select * from user");
                                                while($data_user=mysqli_fetch_array($qry_user)){
                                                    echo '<option value="'.$data_user['id_user'].'">'.$data_user['username'].'</option>';   
                                                }
                                                ?>      
                                                </select>
                                        
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Jumlah</label>
                                        <div class="col-md-12">
                                            <input name="qty" type="number" placeholder="-"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-12">Status bayar</label>
                                            <div class="col-sm-12">
                                                <select name="bayar" id="bayar" class="form-select shadow-none form-control-line" >
                                                    <option>-</option>
                                                    <option value="BELUM">Belum dibayar</option>
                                                    <option value="LUNAS">Dibayar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php
                                        
                                        
                                        ?>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Ok</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include "footer.php";
            ?>
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
</body>

</html>