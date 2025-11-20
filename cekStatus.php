<?php

$status = $_POST['optradio'];
$no_hp = $_POST['no_hp'];

session_start();

echo $_SESSION['nik'];
echo $_SESSION['nama'];
echo $_SESSION['desa'];
echo $_SESSION['alamat'];
echo $_SESSION['ttl'];
echo $_SESSION['ibu'];
echo $_SESSION['komoditas'];
echo $_SESSION['luas_lahan'];
echo $_SESSION['ktp'];
echo $_SESSION['kk'];
echo $_SESSION['sppt'];
echo $status;
echo $no_hp;

include 'koneksi.php';
// Masukan data ke database petani
$query = "INSERT INTO petani (nama, desa, alamat, ttl, nik, ibu, komoditas, luas_lahan, no_hp, status, ktp, kk, sppt) VALUES ('" . $_SESSION['nama'] . "', '" . $_SESSION['desa'] . "', '" . $_SESSION['alamat'] . "', '" . $_SESSION['ttl'] . "', '" . $_SESSION['nik'] . "', '" . $_SESSION['ibu'] . "', '" . $_SESSION['komoditas'] . "', '" . $_SESSION['luas_lahan'] . "', '" . $no_hp . "', '" . $status . "', '" . $_SESSION['ktp'] . "', '" . $_SESSION['kk'] . "', '" . $_SESSION['sppt'] . "')";

$sql = mysqli_query($koneksi, $query);
// Cek Sukses
if ($sql) {
    session_destroy();
    header("location:HomeUser.php?alert=berhasil");
} else {
    header("location:EndUser4.php?alert=gagal");
}
