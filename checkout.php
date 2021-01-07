<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['akun'])) {
    echo "<script>alert('Login Terlebih Dahulu')</script>";
    echo "<script>location='index.php'</script>";
}

$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * from transaksi where id_transaksi= '$idpem'");
$detpem = $ambil->fetch_assoc();

$idygbeli = $detpem["id_akun"];
$idyglogin = $_SESSION["akun"]["id_akun"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		
	<?php include 'header.php' ?>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" method="post">
		<div class="container">
            
        <h2 class="ltext-106 cl5 p-b-30">Payment Confirmation</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card text-white bg-danger m-2 mb-3"  style="max-width: 16rem;">
                        <div class="card-header">Bank</div>
                        <div class="card-body">
                            <h5 class="card-title">CIMB Niaga</h5>
                            <p class="card-text">1111111123456789</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-3">
                    <div class="card text-white bg-secondary m-2 mb-3" style="max-width: 16rem;">
                        <div class="card-header">Bank</div>
                        <div class="card-body">
                            <h5 class="card-title">BNI</h5>
                            <p class="card-text">1222222223456789</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-white bg-warning m-2 mb-3" style="max-width: 16rem;">
                        <div class="card-header">Bank</div>
                        <div class="card-body">
                            <h5 class="card-title">Mandiri</h5>
                            <p class="card-text">1233333333456789</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-white bg-primary m-2 mb-3" style="max-width: 16rem;">
                        <div class="card-header">Bank</div>
                        <div class="card-body">
                            <h5 class="card-title">BCA</h5>
                            <p class="card-text">1234444444456789</p>
                        </div>
                    </div>
                </div>
            </div>

			<div class="row">
                <section class="container">
                    <div class="container-fluid">
                        <hr>

                        <div class="alert alert-info">Bill of Payment <strong>$<?php echo number_format($detpem['tagihan']) ?></strong></div>

                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $detpem['username']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phonenumber" class="form-control" value="<?php echo $_SESSION['akun']['telepon']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Bill</label>
                                <input type="number" name="tagihan" class="form-control" value="<?php echo $detpem['tagihan']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Proof of Payment</label>
                                <input type="file" name="bukti" class="form-control" required="">
                            </div>
                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor4 hov-btn3 p-lr-15 trans-04 pointer" name="kirim">Send</button>
                        </form>
                    </div>
            <?php 

            if (isset($_POST["kirim"])) {
                $username = $detpem['username'];
                $namabukti = $_FILES["bukti"]["name"];
                $namafix = date("YmdHis").$username.$namabukti;
                $ukuranbukti = $_FILES['bukti']['size'];
                $errorbukti = $_FILES['bukti']['error'];
                $lokasibukti = $_FILES["bukti"]["tmp_name"];
                move_uploaded_file($lokasibukti , 'images/products/'.$namafix);

                $koneksi->query("UPDATE transaksi set bukti_transaksi = '$namafix', status_transaksi = 'Waiting for Confirmation' where id_transaksi = '$idpem' ");
 
                echo "<script>alert('Thanks for Payment');</script>";
                echo "<script>location='history.php';</script>";
            }

            ?>
                </section>
			</div>
		</div>
	</form>
		
	
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<?php include 'footer.php' ?>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>