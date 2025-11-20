<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <title>Forum Tani</title>

</head>

<body style="background-color: #FDFDFD;">
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
    include 'koneksi.php';
    $username = $_SESSION['username'];
    $admin = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");
    $pro = mysqli_fetch_assoc($admin);
    ?>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="HomeAdmin.php" style="margin-top: 27px;">
                    <img src="assets/back-login.png" class="img-back">
                </a>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4 card-edit">
                <div class="card-body" style="background-color: #F2EAE1;">

                    <div class="container-text-edit d-flex">
                        <img src="assets/line-1.svg" class="brand-icon" />
                        <div class="brand-edit">SETTINGS</div>
                    </div>
                    <div class="container edit-admin-container">
                        <div class="illustration">
                            <img src="assets/img/user/<?= $pro['foto'] ?>" width="100" style="border-radius: 50%;" class="edit-admin-img">
                        </div>
                        <div class="edit-admin-text">
                            <p><?= $pro['nama'] ?></p>
                        </div>
                        <div class="edit-admin-foto">
                            <form action="ubahAdmin.php" method="post" id="formProfile" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" id="" value="<?= $pro['id_user'] ?>">
                                <label for="edit-foto" style="cursor: pointer;">Edit Foto
                                    <input type="file" name="foto" value="" id="edit-foto" class="upload-file" />
                                </label>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-top: 20px;">
                        <div class="col-10">
                            <input type="hidden" name="id_user" id="" value="<?= $pro['id_user'] ?>">
                            <input class="form-control edit-input-data" type="text" id="input-nama" value="<?= $pro['email'] ?>" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <input class="form-control edit-input-data" type="text" id="input-alamat" value="<?= $pro['nama'] ?>" name="nama">
                        </div>
                    </div>

                    </form>
                    <div class="container" style="display: flex;">
                        <a href="AdminSettingPassword.php">
                            <Button class="btn-ganti-password">Ganti Password</Button>
                        </a>
                        <button type="submit" class="btn-simpan-data" id="btn-simpan">Simpan Perubahan</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Content -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>


        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

        <script>
            document.getElementById("btn-simpan").addEventListener("click", function() {
                document.getElementById("formProfile").submit();
            });
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>