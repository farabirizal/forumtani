<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forum Tani</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
    include "koneksi.php";
    $id = $_GET['id'];
    $petani = mysqli_query($koneksi, "SELECT * FROM petani WHERE id_petani = '$id' ");
    $pro = mysqli_fetch_assoc($petani);
    $username = $_SESSION['username'];
    $admin = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");
    $profile = mysqli_fetch_assoc($admin);
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="assets/line-1.svg" />
                </div>
                <div class="sidebar-brand-text mx-3">EDIT</div>
            </div>

            <li class="nav-item">
                <div class="illustration">
                    <img src="assets/img/user/<?= $profile['foto'] ?>" width="100" style="border-radius: 50%;" class="img-admin">
                </div>
                <div class="admin-text">
                    <p><?= $profile['nama'] ?></p>
                </div>
                <div class="admin-level">
                    <p>Admin</p>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Nav Item - Tables -->
            <li class="nav-item" style="margin-top: 150px;">
                <button type="submit" class="" id="btn-edit">Simpan Perubahan</button>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #F8F8F8;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <a class="" href="HomeAdmin.php" id="alertsDropdown" role="button">
                        <img src="assets/back-login.png" class="img-back">
                    </a>
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Image -->
                    <div class="container">
                        <form action="ubah.php" method="post" enctype="multipart/form-data" id="myForm">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="upload-ktp">
                                        <input type="file" name="ktp" class="upload-file" id="upload-ktp" />
                                        <img src="assets/upload-ktp.svg" class="upload-file-resp" />
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label for="upload-kk">
                                        <input type="file" name="kk" id="upload-kk" class="upload-file" />
                                        <img src="assets/upload-kk.svg" class="upload-file-resp" />
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label for="upload-sppt">
                                        <input type="file" name="sppt" id="upload-sppt" class="upload-file" />
                                        <img src="assets/upload-sppt.svg" class="upload-file-resp" />
                                    </label>
                                </div>
                            </div>
                    </div>
                    <!-- End Image -->

                    <!-- Container Text -->
                    <div class="form-group row" style="margin-top: 20px;">
                        <label for="input-nama" class="col-2 col-form-label label-input">Nama</label>
                        <div class="col-10">
                            <input type="hidden" name="id_petani" value="<?= $pro['id_petani'] ?>">
                            <input class="form-control input-data" type="text" id="input-nama" name="nama" value="<?= $pro['nama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-desa" class="col-2 col-form-label label-input">Desa</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-desa" name="desa" value="<?= $pro['desa'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-alamat" class="col-2 col-form-label label-input">Alamat</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-alamat" name="alamat" value="<?= $pro['alamat'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-ttl" class="col-2 col-form-label label-input">TTL</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-ttl" name="ttl" value="<?= $pro['ttl'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-nik" class="col-2 col-form-label label-input">No NIK</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-nama" name="nik" value="<?= $pro['nik'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-ibu" class="col-2 col-form-label label-input">Ibu Kandung</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-ibu" name="ibu" value="<?= $pro['ibu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-komoditas" class="col-2 col-form-label label-input">Komoditas</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-komoditas" name="komoditas" value="<?= $pro['komoditas'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-luas" class="col-2 col-form-label label-input">Luas Lahan</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-luas" name="luas_lahan" value="<?= $pro['luas_lahan'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-sebagai" class="col-2 col-form-label label-input">Sebagai</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-sebagai" name="status" value="<?= $pro['status'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-hp" class="col-2 col-form-label label-input">No HP</label>
                        <div class="col-10">
                            <input class="form-control input-data" type="text" id="input-hp" name="no_hp" value="<?= $pro['no_hp'] ?>">
                        </div>
                    </div>
                    </form>
                    <!-- End Container Text -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        document.getElementById("btn-edit").addEventListener("click", function() {
            document.getElementById("myForm").submit();
        });
    </script>

</body>

</html>