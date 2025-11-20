<?php

include 'koneksi.php';
$sebelum = $_POST['sebelumnya'];
$baru = $_POST['baru'];
$konfirmasi = $_POST['konfirmasi'];
$id_user = $_POST['id_user'];

// Cek password sebelumnya apakah benar
$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user' AND password='$sebelum'");
if (mysqli_num_rows($cek) == 0) {
    header("location:AdminSettingPassword.php?alert=password_sebelumnya_salah");
} else {
    if ($baru == $konfirmasi) {
        $query = "UPDATE  user SET password='$baru' WHERE id_user='$id_user'";
        $sql = mysqli_query($koneksi, $query);
        // Cek Sukses
        if ($sql) {
            header("location:AdminSettingPassword.php?alert=berhasil");
        } else {
            header("location:AdminSettingPassword.php?alert=gagal");
        }
    } else {
        header("location:AdminSettingPassword.php?alert=password_tidak_sama");
    }
}
