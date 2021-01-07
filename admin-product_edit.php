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
<body class="background-edit">
    <form class="box-edit" action="admin-product_editproses.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
        <h1>EDIT PRODUCT</h1>

            <?php $id = $_GET['id'];?>
            <?php $query = mysqli_query ($koneksi,"SELECT * from barang where id_barang= $id");?>
            <?php $data = mysqli_fetch_array($query);?>

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                        <div class="dropdown stext-102">
											<select class="js-select2" name="categories">
												<option>2x2</option>
                                                <option>3x3</option>
                                                <option>Lubricant</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
        <input type="text" name="productname" placeholder="Product Name" value="<?php echo $data['nama_barang']?>">
        <input type="file" name="picture1" placeholder="Picture 1">
        <input type="file" name="picture2" placeholder="Picture 2">
        <input type="file" name="picture3" placeholder="Picture 3">
        <input type="number" name="price" placeholder="Price" value="<?php echo $data['harga']?>">
        <textarea name="shortdescription" placeholder="Short Description"><?php echo $data['deskripsisingkat']?></textarea>
        <textarea name="longdescription" placeholder="Long Description"><?php echo $data['deskripsilengkap']?></textarea>
        <input type="text" name="manufacturer" placeholder="Manufacturer" value="<?php echo $data['manufacturer']?>">
                                        <div class="dropdown stext-102">
											<select class="js-select2" name="type">
												<option>2x2</option>
                                                <option>3x3</option>
                                                <option>Lubricant</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
        <input type="text" name="dimension" placeholder="Dimension" value="<?php echo $data['dimension']?>">
        <input type="text" name="weight" placeholder="Weight" value="<?php echo $data['weight']?>">
        <input type="text" name="releasedate" placeholder="Release Date" value="<?php echo $data['releasedate']?>">
        <input type="number" name="stock" placeholder="Stock" value="<?php echo $data['stok']?>">
        <ul class="row">
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <a href="admin-product.php">Cancel</a>
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