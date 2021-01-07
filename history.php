<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>History</title>
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
        <h3 class="ltext-106 cl5 p-b-30"><?php echo $_SESSION["akun"]["username"] ?>'s Shoping History</h3>
			<div class="row">
				<div class="col-lg-11 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">No</th>
									<th class="column-2">Transaction ID</th>
									<th class="column-3">Destination</th>
									<th class="column-4">Bill</th>
									<th class="column-5">Date of Payment</th>
									<th class="column-6">Status</th>
									<th class="column-7"></th>
								</tr>

								<?php
                                    $nomor = 1; 
                                    $id_akun= $_SESSION["akun"]["id_akun"];

                                    $ambil = $koneksi->query("SELECT * from transaksi where id_akun ='$id_akun'");

                                    while ($pecah = $ambil->fetch_assoc()) {
                                ?>
								<tr class="table_row">
									<td class="column-1"><?php echo $nomor; ?></td>
									<td class="column-2"><?php echo $pecah['id_transaksi']; ?></td>
									<td class="column-3"><?php echo $pecah['alamat']; ?></td>
									<td class="column-4">$<?php echo $pecah['tagihan']; ?></td>
									<td class="column-5"><?php echo $pecah['tanggal_transaksi']; ?></td>
									<td class="column-6">
                                    <h5>
                                        <?php 
                                        $status = $pecah["status_transaksi"];

                                        if ($status== "Done"): ?>
                                            <a href="#" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 m-tb-10">Done</a>
                                        <?php elseif ($status== "Waiting for Confirmation"): ?>
                                            <a href="#" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 m-tb-10">Waiting for Confirmation</a>
                                        <?php elseif ($status== "Delivery"): ?>
                                            <a href="#" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 m-tb-10">Delivery</a>
                                        <?php else : ?> 
                                            <a href="checkout.php?id=<?php echo $pecah["id_transaksi"] ?>" class="flex-c-m stext-109 cl2 size-127 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Not Yet Paid</a>
                                        <?php endif ?>
                                    </h5>
                                	</td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php } ?>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
							</div>
							<a href="product.php" class="flex-c-m stext-101 cl2 size-119 bg3 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Continue Shopping
							</a>
						</div>
					</div>
				</div>
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