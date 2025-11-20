<?php

include 'koneksi.php';

// Aturan
$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');

// Scan Foto
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:AdminSettingProfile.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/user/' . $rand . '_' . $filename);

        $query = "UPDATE user SET foto='$xx' WHERE id_user='$_POST[id_user]'";

        $sql = mysqli_query($koneksi, $query);
        // Cek Sukses
        if ($sql) {
            header("location:AdminSettingProfile.php?alert=berhasil");
        } else {
            header("location:AdminSettingProfile.php?alert=gagal");
        }
    } else {
        header("location:AdminSettingProfile.php?alert=gagal_ukuran");
    }
}
