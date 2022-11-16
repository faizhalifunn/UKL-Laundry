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
                        <a class="btn btn-success text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="m-r-10 mdi mdi-account-plus"></i>Add
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="tambah_user.php"><i class="m-r-10 mdi mdi-account-plus"></i>
                                    Add User</a>
                                <a class="dropdown-item" href="tambah_member.php"><i class="m-r-10 mdi mdi-account-multiple-plus"></i>
                                    Add Member</a>
                                
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
                                            <th scope="col">username</th>
                                            <th scope="col">level</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include "../../koneksi.php";
                                        $qry_user=mysqli_query($conn,"select *from user");
                                        $no=0;
                                        while($data_user=mysqli_fetch_array($qry_user)){
                                        $no++;?>
                                        <tr>
                                            <th scope="row"><?=$no?></th>
                                            <td><?=$data_user['nama']?></td>
                                            <td><?=$data_user['username']?></td>
                                            <td><?=$data_user['role']?></td>
                                            <td><a style="color: #FFC207;" href="ubah_user.php?id_user=<?=$data_user['id_user']?>" 
                                                    <i class="m-r-10 mdi mdi-pencil"></i></a> 
                                                <a style="color: #E34724;"href="hapus_user.php?id_user=<?=$data_user['id_user']?>"
                                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                                    <i class="m-r-10 mdi mdi-delete"></i></a></tr>
                                            
                                            
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div> </br></br>
                            
                             <!-- <========================================================================END TABLE USER============================================== -->
                             <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Member</h4>
                                        <h5 class="card-subtitle">view and edit member</h5>
                                    </div>
                                    <div class="ms-auto">
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                             <!-- <========================================================================TABLE MEMBER============================================== -->
                             <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr class="bg-light">
                                            <th scope="col">No</th>                       
                                            <th scope="col">Nama</th>
                                            <th scope="col">alamat</th>
                                            <th scope="col">gender</th>
                                            <th scope="col">telepon</th>        
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include "../../koneksi.php";
                                        $qry_member=mysqli_query($conn,"select *from member");
                                        $no=0;
                                        while($data_member=mysqli_fetch_array($qry_member)){
                                        $no++;?>
                                        <tr>
                                            <th scope="row"><?=$no?></th>
                                            <td><?=$data_member['nama_member']?></td>
                                            <td><?=$data_member['alamat']?></td>
                                            <td><?=$data_member['jenis_kelamin']?></td>
                                            <td><?=$data_member['telepon']?></td>
                                            <td><a style="color: #FFC207;" href="ubah_member.php?id_member=<?=$data_member['id_member']?>" 
                                                    <i class="m-r-10 mdi mdi-pencil"></i></a> 
                                                <a style="color: #E34724;"href="hapus_member.php?id_member=<?=$data_member['id_member']?>"
                                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                                    <i class="m-r-10 mdi mdi-delete"></i></a></tr>   
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div> </br></br>                     
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
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>