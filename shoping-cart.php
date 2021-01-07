<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['akun'])) {
    echo "<script>alert('Login Terlebih Dahulu')</script>";
    echo "<script>location='index.php'</script>";
}

if (empty($_SESSION['keranjang']) or !isset($_SESSION['keranjang'])) {
    echo "<script>alert('Keranjang Kosong, Silahkan Berbelanja Terlebih Dahulu')</script>";
    echo "<script>location='product.php'</script>";
}
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-11 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-6"></th>
								</tr>

								<?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah): ?>
								<?php
                            	$ambil = $koneksi->query("SELECT * from barang where id_barang= '$id_barang'");
                            	$pecah = $ambil->fetch_assoc();
								$total = $pecah['harga']*$jumlah;
								$totalharga = 0;
								$totalharga+= $total;
								$kurir = 3;
                            	?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/products/<?php echo $pecah['foto1']; ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $pecah['nama_barang']; ?></td>
									<td class="column-3">$<?php echo $pecah['harga']; ?></td>
									<td class="column-4"><?php echo $jumlah; ?></td>
									<td class="column-5">$<?php echo number_format($total); ?></td>
									<td class="column-6">
                                    <h5>
                                        <a href="cart-delete.php?id=<?php echo $id_barang ?>" class="flex-c-m stext-109 cl2 size-126 bg3 bor19 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Delete</a>
                                    </h5>
                                	</td>
								</tr>
								<?php endforeach ?>
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

				<div class="col-sm-1 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl5 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl3">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl3">
									$<?php echo number_format($totalharga); ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl3">
									Shipping:
								</span>
							</div>
							
							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									<textarea type="text" class="form-control" readonly><?php echo $_SESSION['akun']['alamat'] ?></textarea>
								</p>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl3">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl3">
									<?php $totalhargakurir = $totalharga+$kurir; ?>
									$<?php echo $totalhargakurir; ?>
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="checkout">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
		
	<?php 
		if (isset($_POST["checkout"])) {
							
			$id_akun = $_SESSION['akun']['id_akun'];
			$username = $_SESSION['akun']['username'];
			$alamat = $_SESSION['akun']['alamat'];
			$nama_barang = $_SESSION['keranjang'][''];
            $tanggal_transaksi = date("d-m-Y");

            $koneksi->query("INSERT into transaksi (
            id_akun, username, alamat, tagihan, tanggal_transaksi, bukti_transaksi, status_transaksi)
            values('$id_akun', '$username','$alamat', '$totalhargakurir', '$tanggal_transaksi', '', 'Not Yet Paid')");

            $id_barang_terjual = $koneksi->insert_id;	

            foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) {
                $ambil = $koneksi->query("SELECT * from barang where id_barang= '$id_barang'");
                $perproduk = $ambil->fetch_assoc();

                $nama = $perproduk['nama_barang'];
                $harga = $perproduk['harga'];

                $subharga = $perproduk['harga']*$jumlah;
                $koneksi->query("INSERT into barang_terjual (id_transaksi, id_barang, nama_barang, harga, jumlah, subharga) values('$id_barang_terjual','$id_barang','$nama','$harga','$jumlah','$subharga')");

                $koneksi->query("UPDATE barang set stok = stok -$jumlah where id_barang = '$id_barang'");

				echo "<script>alert('Order Success');</script>";
				echo "<script>location='checkout.php?id=$id_barang_terjual';</script>";
			}
			unset($_SESSION['keranjang']);
		}
	?>
		

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