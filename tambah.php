<?php

include "koneksi.php";

$nama = $_POST['nama'];
$desa = $_POST['desa'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$nik = $_POST['nik'];
$ibu = $_POST['ibu'];
$komoditas = $_POST['komoditas'];
$luas_lahan = $_POST['luas_lahan'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];

// Aturan
$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');

// Scan KTP
$filenamektp = $_FILES['ktp']['name'];
$ukuranktp = $_FILES['ktp']['size'];
$extktp = pathinfo($filenamektp, PATHINFO_EXTENSION);

// Scan KK
$filenamekk = $_FILES['kk']['name'];
$ukurankk = $_FILES['kk']['size'];
$extkk = pathinfo($filenamekk, PATHINFO_EXTENSION);

// Scan SPPT
$filenamesppt = $_FILES['sppt']['name'];
$ukuransppt = $_FILES['sppt']['size'];
$extsppt = pathinfo($filenamesppt, PATHINFO_EXTENSION);

if (!in_array($extktp, $ekstensi) && !in_array($extkk, $ekstensi) && !in_array($extsppt, $ekstensi)) {
    header("location:AdminCreate.php?alert=gagal_ekstensi");
} else {
    if ($ukuranktp < 1000000 && $ukurankk < 1000000 && $ukuransppt < 1000000) {
        $xxktp = $rand . '_' . $filenamektp;
        $xxkk = $rand . '_' . $filenamekk;
        $xxsppt = $rand . '_' . $filenamesppt;
        move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/img/ktp/' . $rand . '_' . $filenamektp) && move_uploaded_file($_FILES['kk']['tmp_name'], 'assets/img/kk/' . $rand . '_' . $filenamekk) && move_uploaded_file($_FILES['sppt']['tmp_name'], 'assets/img/sppt/' . $rand . '_' . $filenamesppt);

        $query = "INSERT INTO petani (nama, desa, alamat, ttl, nik, ibu, komoditas, luas_lahan, no_hp, status, ktp, kk, sppt) VALUES ('$nama', '$desa', '$alamat', '$ttl', '$nik', '$ibu', '$komoditas', '$luas_lahan', '$no_hp', '$status', '$xxktp', '$xxkk', '$xxsppt')";

        $sql = mysqli_query($koneksi, $query);
        // Cek Sukses
        if ($sql) {
            header("location:HomeAdmin.php?alert=berhasil");
        } else {
            header("location:HomeAdmin.php?alert=gagal");
        }
    } else {
        header("location:AdminCreate.php?alert=gagal_ukuran");
    }
}
