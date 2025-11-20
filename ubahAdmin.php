<?php
include 'koneksi.php';

$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['nama'];
$id_user = $_POST['id_user'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');

$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// cek apakah foto diinput
if ($filename == "") {
    $query = "UPDATE user SET email='$email',  nama='$name' WHERE id_user='$id_user'";
    $sql = mysqli_query($koneksi, $query);
    // Cek Sukses
    if ($sql) {
        header("location:HomeAdmin.php?alert=berhasil");
    } else {
        header("location:HomeAdmin.php?alert=gagal");
    }
} else {
    if (!in_array($ext, $ekstensi)) {
        header("location:HomeAdmin.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/user/' . $rand . '_' . $filename);

            $query = "UPDATE user SET foto='$xx', email='$email',  nama='$name' WHERE id_user='$id_user'";

            $sql = mysqli_query($koneksi, $query);
            // Cek Sukses
            if ($sql) {
                header("location:HomeAdmin.php?alert=berhasil_dengan_foto");
            } else {
                header("location:HomeAdmin.php?alert=gagal_dengan_foto");
            }
        } else {
            header("location:HomeAdmin.php?alert=gagal_ukuran");
        }
    }
}
