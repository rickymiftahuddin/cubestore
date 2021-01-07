<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cube Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
<!--===============================================================================================-->
</head>
<body class="background">
    <form class="box-register" action="register.php" method="post">
        <h1>SIGN UP</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="address" placeholder="Address">
        <input type="number" name="phonenumber" placeholder="Phone Number">
        <ul class="row">
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <a href="index.php">Cancel</a>
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <input type="submit" name="submit" value="Sign Up">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
        </ul>
    </form>
    <?php

                if (isset($_POST["submit"])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $alamat = $_POST['address'];
                    $telepon = $_POST['phonenumber'];

                    $ambil = $koneksi->query("SELECT * from akun where username = '$username'");
                    $ygcocok = $ambil->num_rows;

                    if ($ygcocok==1) {
                        echo "<script>alert('Pendaftaran Gagal, Username telah digunakan');</script>";
                        echo "<script>location='register.php'</script>";
                    }else{
                        $koneksi->query("INSERT into akun (username,password,email,alamat,telepon,status) values('$username','$password','$email','$alamat','$telepon','0')");

                        echo "<script>alert('Pendaftaran Sukses, Silahkan Login');</script>";
                        echo "<script>location='index.php'</script>";
                    }

                }

    ?>
</body>
</html>