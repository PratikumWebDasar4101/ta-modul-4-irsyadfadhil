<?php
session_start();
    $user = array(
        array("ichad","ichad")
    );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST">
    <H1><center>LOGIN</center></H1><br>
    <hr>
    Nama:<input type="text" name="name"><br><br>
    Password :<input type="password" name="password">
    <input type="submit" value ="login">
    <hr>
</form>
</body>
</html>

<?php
    if(isset($_POST['name'])){
        $username = $_POST['name'];
        $password = $_POST['password'];

        $_SESSION['name']= $username;

        $cek=0;
        for ($i=0; $i <count($user) ; $i++) { 
            if($user[$i][0]== $username && $user[$i][1]== $password){
                header("Location: formawal.html");
                $cek=1;
            }
        }
        if($cek==0){
            echo "Nama/Password anda salah!";
        }
    }
?>