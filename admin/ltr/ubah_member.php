
<?php include 'navbar.php';?>
        <?php 
        include "../../koneksi.php";
        $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
        $dt_member=mysqli_fetch_array($qry_get_member);
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
                        <h4 class="page-title">Profile Page</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                                <form action="proses_ubah_member.php" method="POST" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                    <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input name="nama_member" type="text" value="<?=$dt_member['nama_member']?>"
                                                class="form-control form-control-line">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Jenis Kelamin</label>
                                            <div class="col-sm-12">
                                                <select name="jenis_kelamin" class="form-select shadow-none form-control-line" value="<?=$dt_member['jenis_kelamin']?>">
                                                    <option value="L" <?php if($dt_member['jenis_kelamin']=="L") echo 'selected="selected"'; ?>>Laki-Laki</option>
                                                    <option value="P"  <?php if($dt_member['jenis_kelamin']=="P") echo 'selected="selected"'; ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?=$dt_member['alamat']?>"
                                                class="form-control form-control-line" name="alamat"
                                                id="alamat">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?=$dt_member['telepon']?>"
                                                class="form-control form-control-line" name="telepon"
                                                id="telepon">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input name="password" type="password" value="<?=$dt_member['password']?>"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Edit User</button>
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