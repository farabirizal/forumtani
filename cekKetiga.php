<?php

$ibu = $_POST['ibu'];
$komoditas = $_POST['komoditas'];
$luas_lahan = $_POST['luas_lahan'];

session_start();
$_SESSION['ibu'] = $ibu;
$_SESSION['komoditas'] = $komoditas;
$_SESSION['luas_lahan'] = $luas_lahan;

header("Location:EndUser4.php");
