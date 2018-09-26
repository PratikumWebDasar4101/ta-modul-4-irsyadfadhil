<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<h1><center>SELAMAT DATANG DI TOKOK PENIKMAT MALAM</center> </h1>
	<hr>
	<form action="proses_belanja.php" method="post">
	    <h3>Jenis Barang :</h3><hr>
	    <input type="checkbox" name="belanjaan[]" value="MieInstan">Mie Instan<br>  
	    <input type="checkbox" name="belanjaan[]" value="Kecap">Kecap<br>       
	    <input type="checkbox" name="belanjaan[]" value="Saos">Saos<br> 
	    <input type="checkbox" name="belanjaan[]" value="Shampo">Shampo<br>      
	    <input type="checkbox" name="belanjaan[]" value="Odol">Odol<br>  
	    <hr>
	    <br>
	    <hr>
	    <h3>Jenis Pengiriman :</h3><hr>
	    <input type="radio" name="pengiriman" value="Kilat">Kilat<br>
	    <input type="radio" name="pengiriman" value="Biasa">Reguler
	    <hr>
	    <br>
	    <hr>
	    <h3>Alamat :</h3><hr>
	    <input type="text" name="alamat" required><br><br>
	    <hr>
	    <input type="submit" value="BELI">
	    <hr>
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<hr>
	<a href="proses_login.php">LOGOUT</a>
	<hr>
</body>
</html>
