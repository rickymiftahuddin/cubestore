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
    <form class="box-register" action="admin-user_editproses.php?id=<?php echo $_GET['id'];?>" method="post">
        <h1>EDIT</h1>

            <?php $id = $_GET['id'];?>
            <?php $query = mysqli_query ($koneksi,"SELECT * from akun where id_akun= $id");?>
            <?php $data = mysqli_fetch_array($query);?>

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <input type="text" name="username" placeholder="Username" value="<?php echo $data['username']?>">
        <input type="text" name="password" placeholder="Password" value="<?php echo $data['password']?>">
        <input type="email" name="email" placeholder="Email" value="<?php echo $data['email']?>">
        <input type="text" name="address" placeholder="Address" value="<?php echo $data['alamat']?>">
        <input type="number" name="phonenumber" placeholder="Phone Number" value="<?php echo $data['telepon']?>">
        <ul class="row">
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <a href="admin-user.php">Cancel</a>
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <input type="submit" name="submit" value="Save">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
        </ul>
    </form>

</body>
</html>