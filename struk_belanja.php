<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <H1><center>STRUK BELANJA ANDA</center></H1><br>
    <hr>
    <table align="center" border="2" width="center">
        <tr>
            <th>Nama pembeli</th>
            <th>Tanggal Pembelian</th>
            <th>List Barang</th>
            <th>Jenis dan Biaya pengiriman</th>
            <th>Total Pembayaran</th>
        </tr>
        <tr>
            <td align="center">
                <?php
                    echo $_SESSION['name'];
                ?>
            </td>
            <td align="center">
                <?php
                    $tanggal = date("d-M-Y");
                     echo $tanggal;
                ?>
            </td>
            <td align="center">
                <?php
                foreach($_SESSION['belanjaan'] as $pilihan){
                echo "-";
                echo $pilihan. "<br>";
                }
                ?>
            </td>
            <td align="center">
                <?php
                        echo $_SESSION['pengiriman'];
                        echo "<br>";
                        echo "Rp.";
                        echo $_SESSION['harga1'];
                ?>
            </td>
            <td align="center">
                <?php
                    echo "Rp.";
                    echo $_SESSION['total'];
                ?>
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
