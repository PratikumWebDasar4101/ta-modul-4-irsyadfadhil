<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <H1><center>HASIL FORM ANDA</center></H1><br>
    <hr>
    <table align="center" border='2'>
        <tr>
            <th>Genre Film</th>
            <th>Tujuan Wisata</th>
        </tr>
        <tr>
            <td>
                <?php
                    foreach($_SESSION['film'] as $pilihan){
                        echo $pilihan ."<br>";
                    }
                ?>
            </td>
            <td>
                 <?php
                 foreach($_SESSION['wisata'] as $pilihan){
                     echo $pilihan . "<br>";
                 }   
                 ?>
            </td>
        </tr>
        <tr> 
            <td>
                <a href="formawal.html">Hapus Data</a>
            </td>
            <td>
                <a href="formawal.html">Hapus Data</a>
            </td>
        </tr>
    </table>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <a href="proses_login1.php">LOGOUT</a>
    <hr>
</body>
</html>
