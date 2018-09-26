<?php
session_start();

$film = $_POST['film'];
$wisata = $_POST['wisata'];

$_SESSION['film'] = $_POST['film'];
$_SESSION['wisata'] = $_POST['wisata'];

header("location:halamanakhir.php");
?>
