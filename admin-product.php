<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cube Store - Admin</title>
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
    <link rel="stylesheet" type="text/css" href="style-dashboardadmin.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
<!--===============================================================================================-->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg3 fixed-top">
        <a class="navbar-brand text-white" href="#">CUBE STORE</b></a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
            </form>
            <div class="icon ml-4">
              <a href="logout.php" class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Sign Out"></a> 
            </div>
    </nav>

      <div class="row no-gutters mt-5 ">
        <div class="col-md-1 bg-secondary mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="admin.php">Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="admin-user.php">User</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="admin-product.php">Product</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="admin-transaction.php">Transaction</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="admin-sold.php">Sold</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        
            <div class="col-md-11 p-5 pt-2" style="overflow-x:auto;">
                <div class="row">
                <h3>Product</h3>
                <div class="col" align="right"><a href="admin-product_add.php" class="btn btn-success"><h3><i class="far fa-plus-square"></i></h3></a></div>
                </div>

                <table class="table" style="overflow-x:auto;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categories</th>
                        <th>Name</th>
                        <th>Picture1</th>
                        <th>Picture2</th>
                        <th>Picture3</th>
                        <th>Price</th>
                        <th>Shoooooooooooooooooooooooooooooooooooooooort Description</th>
                        <th>Loooooooooooooooooooooooooooooooooooooooong Description</th>
                        <th>Manufacturer</th>
                        <th>Type</th>
                        <th>Dimension</th>
                        <th>Weight</th>
                        <th>Release Date</th>
                        <th>Stock</th>
                    </tr>
                    <?php $query = mysqli_query ($koneksi,"SELECT * from barang order by id_barang"); ?>
                        
                        <?php while ($data = mysqli_fetch_array($query)):?>

                        <tr>
                            <td><?php echo $data['id_barang']?></td>
                            <td><?php echo $data['kategori_barang']?></td>
                            <td><?php echo $data['nama_barang']?></td>
                            <td><?php echo $data['foto1']?></td>
                            <td><?php echo $data['foto2']?></td>
                            <td><?php echo $data['foto3']?></td>
                            <td><?php echo $data['harga']?></td>
                            <td><?php echo $data['deskripsisingkat']?></td>
                            <td><?php echo $data['deskripsilengkap']?></td>
                            <td><?php echo $data['manufacturer']?></td>
                            <td><?php echo $data['type']?></td>
                            <td><?php echo $data['dimension']?></td>
                            <td><?php echo $data['weight']?></td>
                            <td><?php echo $data['releasedate']?></td>
                            <td><?php echo $data['stok']?></td>

                            <td>
                                <a href="admin-product_edit.php?id=<?php echo $data['id_barang']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="admin-product_delete.php?id=<?php echo $data['id_barang']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>


                            
                        <?php endwhile; ?>
                        </tr>

                    </thead>
                </table>

            </div>  
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>