<?php

$nama = $_POST['nama'];
$desa = $_POST['optradio'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];

session_start();
$_SESSION['nama'] = $nama;
$_SESSION['desa'] = $desa;
$_SESSION['alamat'] = $alamat;
$_SESSION['ttl'] = $ttl;

header("Location:EndUser3.php");
