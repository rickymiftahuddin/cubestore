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
        <form method="post">
            <div class="col-md-11 p-5 pt-2">

                <h3>Transaction</h3>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Account ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Address</th>
                        <th scope="col">Bill</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Payment Proof</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php $query = mysqli_query ($koneksi,"SELECT * from transaksi order by id_transaksi"); ?>
                        
                        <?php while ($data = mysqli_fetch_array($query)):?>

                        <tr>
                            <td><?php echo $data['id_transaksi']?></td>
                            <td><?php echo $data['id_akun']?></td>
                            <td><?php echo $data['username']?></td>
                            <td><?php echo $data['alamat']?></td>
                            <td><?php echo $data['tagihan']?></td>
                            <td><?php echo $data['tanggal_transaksi']?></td>
                            <td><?php echo $data['bukti_transaksi']?></td>
                            <td><?php echo $data['status_transaksi']?></td>
                            <td>
                              <?php
                                if ($data['status_transaksi']== "Done"):?>
                                  <a href="#" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">-</a>
                              <?php elseif ($data['status_transaksi']== "Waiting for Confirmation"): ?>
                                  <a href="admin-transaction_proses.php?id=<?php echo $data['id_transaksi']; ?>" name="confirmpayment" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Confirm Payment</a>
                              <?php elseif ($data['status_transaksi']== "Delivery"): ?>
                                  <a href="admin-transaction_proses.php?id=<?php echo $data['id_transaksi']; ?>" name="confirmdelivered" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Confirm Delivered</a>
                              <?php else : ?> 
                                  <a href="#" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Not Yet Paid</a>
                              <?php endif ?>
                            </td>

                        <?php endwhile; ?>
                        </tr>

                    </thead>
                </table>
            </div>
            </form>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>