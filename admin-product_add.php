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
    <form class="box-edit" action="admin-product_add.php" method="post" enctype="multipart/form-data">
        <h1>ADD PRODUCT</h1>

										<div class="dropdown stext-102">
											<select class="js-select2" name="categories">
												<option>2x2</option>
                                                <option>3x3</option>
                                                <option>Lubricant</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
        <input type="text" name="productname" placeholder="Product Name">
        <input type="file" name="picture1" placeholder="Picture 1">
        <input type="file" name="picture2" placeholder="Picture 2">
        <input type="file" name="picture3" placeholder="Picture 3">
        <input type="number" name="price" placeholder="Price">
        <textarea name="shortdescription" placeholder="Short Description"></textarea>
        <textarea name="longdescription" placeholder="Long Description"></textarea>
        <input type="text" name="manufacturer" placeholder="Manufacturer">
                                        <div class="dropdown stext-102">
											<select class="js-select2" name="type">
												<option>2x2</option>
                                                <option>3x3</option>
                                                <option>Lubricant</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
        <input type="text" name="dimension" placeholder="Dimension">
        <input type="text" name="weight" placeholder="Weight">
        <input type="text" name="releasedate" placeholder="Release Date">
        <input type="number" name="stock" placeholder="Stock">
        <ul class="row">
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <a href="admin-product.php">Cancel</a>
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
                <input type="submit" name="submit" value="Add">
            </li>
            <li class="col-md-3 col-xl-3 m-lr-auto">
            </li>
        </ul>
    </form>
    <?php

	if (isset($_POST["submit"])) {

            $foto1 = $_FILES['picture1']['name'];
            $fotofix1 = date("YmdHis").'-1-'.$foto1;
            $ukuranfoto1 = $_FILES['picture1']['size'];
            $errorfoto1 = $_FILES['picture1']['error'];
            $tmpname1 = $_FILES['picture1']['tmp_name'];
            move_uploaded_file($tmpname1, 'images/products/'.$fotofix1);

            $foto2 = $_FILES['picture2']['name'];
            $fotofix2 = date("YmdHis").'-2-'.$foto2;
            $ukuranfoto2 = $_FILES['picture2']['size'];
            $errorfoto2 = $_FILES['picture2']['error'];
            $tmpname2 = $_FILES['picture2']['tmp_name'];
            move_uploaded_file($tmpname2, 'images/products/'.$fotofix2);

            $foto3 = $_FILES['picture3']['name'];
            $fotofix3 = date("YmdHis").'-3-'.$foto3;
            $ukuranfoto3 = $_FILES['picture3']['size'];
            $errorfoto3 = $_FILES['picture3']['error'];
            $tmpname3 = $_FILES['picture3']['tmp_name'];
            move_uploaded_file($tmpname3, 'images/products/'.$fotofix3);

            $kategori               = $_POST['categories'];
            $nama_barang            = $_POST['productname'];
            $harga                  = $_POST['price'];
            $deskripsisingkat       = $_POST['shortdescription'];
            $deskripsilengkap       = $_POST['longdescription'];
            $manufacturer           = $_POST['manufacturer'];
            $type                   = $_POST['type'];
            $dimension              = $_POST['dimension'];
            $weight                 = $_POST['weight'];
            $releasedate            = $_POST['releasedate'];
            $stok                   = $_POST['stock'];

            $ambil = $koneksi->query("SELECT * from barang where nama_barang = '$nama_barang'");
            $ygcocok = $ambil->num_rows;

            if ($ygcocok==1) {
                echo "<script>alert('Penambahan Produk Gagal, Produk Sudah Ada');</script>";
                echo "<script>location='admin-product_add.php'</script>";
            }else{
                $koneksi->query("INSERT into barang 
                (kategori_barang,nama_barang,foto1,foto2,foto3,harga,deskripsisingkat,deskripsilengkap,manufacturer,type,dimension,weight,releasedate,stok) 
                values
                ('$kategori','$nama_barang','$fotofix1','$fotofix2','$fotofix3','$harga','$deskripsisingkat','$deskripsilengkap','$manufacturer','$type','$dimension','$weight','$releasedate','$stok')");

                echo "<script>alert('Produk Berhasil Ditambahkan');</script>";
                echo "<script>location='admin-product.php'</script>";
            }
	}
    ?>

</body>
</html>