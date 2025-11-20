<?php

include "koneksi.php";

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
    header("location:EndUser1.php?alert=gagal_ekstensi");
} else {
    if ($ukuranktp < 1000000 && $ukurankk < 1000000 && $ukuransppt < 1000000) {
        $xxktp = $rand . '_' . $filenamektp;
        $xxkk = $rand . '_' . $filenamekk;
        $xxsppt = $rand . '_' . $filenamesppt;
        move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/img/ktp/' . $rand . '_' . $filenamektp) && move_uploaded_file($_FILES['kk']['tmp_name'], 'assets/img/kk/' . $rand . '_' . $filenamekk) && move_uploaded_file($_FILES['sppt']['tmp_name'], 'assets/img/sppt/' . $rand . '_' . $filenamesppt);


        session_start(); // Start session nya
        $_SESSION['ktp'] = $xxktp;
        $_SESSION['kk'] = $xxkk;
        $_SESSION['sppt'] = $xxsppt;

        header("Location:EndUser2.php");
    } else {
        header("location:EndUser1.php?alert=gagal_ukuran");
    }
}
