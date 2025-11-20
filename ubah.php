<?php
include 'koneksi.php';
$id_petani = $_POST['id_petani'];
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

// Cek apakah ktp, kk, sppt diinput
if ($filenamektp == "" && $filenamekk == "" && $filenamesppt == "") {
    $query = "UPDATE  petani SET nama='$nama', desa='$desa', alamat='$alamat', ttl='$ttl', nik='$nik', ibu='$ibu', komoditas='$komoditas', luas_lahan='$luas_lahan', no_hp='$no_hp', status='$status' WHERE id_petani='$id_petani'";
    $sql = mysqli_query($koneksi, $query);
    // Cek Sukses
    if ($sql) {
        header("location:HomeAdmin.php?alert=berhasil");
    } else {
        header("location:HomeAdmin.php?alert=gagal");
    }
} else {
    if (!in_array($extktp, $ekstensi) && !in_array($extkk, $ekstensi) && !in_array($extsppt, $ekstensi)) {
        header("location:AdminEdit.php?alert=gagal_ekstensi");
    } else {
        if ($ukuranktp < 1044070 && $ukurankk < 1044070 && $ukuransppt < 1044070) {
            $xxktp = $rand . '_' . $filenamektp;
            $xxkk = $rand . '_' . $filenamekk;
            $xxsppt = $rand . '_' . $filenamesppt;
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/img/ktp/' . $rand . '_' . $filenamektp) && move_uploaded_file($_FILES['kk']['tmp_name'], 'assets/img/kk/' . $rand . '_' . $filenamekk) && move_uploaded_file($_FILES['sppt']['tmp_name'], 'assets/img/sppt/' . $rand . '_' . $filenamesppt);

            $query = "UPDATE  petani SET nama='$nama', desa='$desa', alamat='$alamat', ttl='$ttl', nik='$nik', ibu='$ibu', komoditas='$komoditas', luas_lahan='$luas_lahan', no_hp='$no_hp', status='$status', ktp='$xxktp', kk='$xxkk', sppt='$xxsppt' WHERE id_petani='$id_petani'";

            $sql = mysqli_query($koneksi, $query);
            // Cek Sukses
            if ($sql) {
                header("location:HomeAdmin.php?alert=berhasil");
            } else {
                header("location:HomeAdmin.php?alert=gagal");
            }
        } else {
            header("location:AdminEdit.php?alert=gagal_ukuran");
        }
    }
}
