<?php
session_start();

if(isset($_POST['alamat'])){
    $belanja = $_POST['belanjaan'];
    $pengiriman = $_POST['pengiriman'];
    $totalbelanja=0;

$_SESSION['belanjaan'] = $belanja;
for ($i=0; $i <count($belanja) ; $i++) { 
    if($belanja[$i] == "MieInstan"){
        $harga = 3000;
    } elseif($belanja[$i] == "Kecap"){
        $harga = 5000;
    } elseif($belanja[$i] == "Saos"){
        $harga = 500;
    } elseif($belanja[$i] == "Shampo"){
        $harga = 10000;
    } elseif($belanja[$i] == "Odol"){
        $harga = 10000;
    }
    $totalbelanja = $totalbelanja +$harga;
}


$_SESSION['pengiriman'] = $pengiriman;

if($pengiriman == "Kilat"){
    $harga1 = 20000;
}elseif($pengiriman == "Biasa"){
    $harga1 = 10000;
}

$_SESSION["harga1"] = $harga1;

$totalharga = $totalbelanja+ $harga1;
$_SESSION['total'] =$totalharga;

header("Location:struk_belanja.php");

}
?>
