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
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
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

<body class="animsition">

	<!-- Header -->
	<header>

		<?php include 'header.php' ?>

		<!-- Modal Login -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="box" action="index.php" method="post">
					<h1>LOGIN</h1>
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="submit" value="Login">
					<a href="register.php" class="cl11 hov-cl1">Don't have account??</a>
				</form>
			</div>
		</div>
	</header>

	<?php include 'panel-cart.php' ?>


	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slider01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									GAN Cube Collection
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									BEST 3x3 CUBE
								</h2>
							</div>

							<?php if (isset($_SESSION['akun'])) : ?>
								<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
									<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php else : ?>
								<div class="layer-slick1 animated visible-false js-show-modal-search" data-appear="zoomIn" data-delay="1600">
									<a class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slider02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Easy Set-Up Your Cube
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									TENSIONING SYSTEM
								</h2>
							</div>

							<?php if (isset($_SESSION['akun'])) : ?>
								<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
									<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php else : ?>
								<div class="layer-slick1 animated visible-false js-show-modal-search" data-appear="slideInUp" data-delay="1600">
									<a class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slider03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Lubicle Collection
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									MOST FAVORITE LUBE
								</h2>
							</div>

							<?php if (isset($_SESSION['akun'])) : ?>
								<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
									<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php else : ?>
								<div class="layer-slick1 animated visible-false js-show-modal-search" data-appear="rotateIn" data-delay="1600">
									<a class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Shop Now
									</a>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>
				<div class="item-slick1" style="background-image: url(images/slider04.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Ready for Competition?
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									BE THE CHAMPION
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="https://www.worldcubeassociation.org/competitions" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Register Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<?php if (isset($_SESSION['akun'])) : ?>
						<div class="block1 wrap-pic-w">
							<img src="images/2x2.jpg" alt="IMG-BANNER">

							<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										2x2
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php else : ?>
						<div class="block1 wrap-pic-w js-show-modal-search">
							<img src="images/2x2.jpg" alt="IMG-BANNER">

							<a class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										2x2
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php endif ?>
				</div>


				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<?php if (isset($_SESSION['akun'])) : ?>
						<div class="block1 wrap-pic-w">
							<img src="images/3x3.jpg" alt="IMG-BANNER">

							<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										3x3
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php else : ?>
						<div class="block1 wrap-pic-w js-show-modal-search">
							<img src="images/3x3.jpg" alt="IMG-BANNER">

							<a class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										3x3
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php endif ?>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<?php if (isset($_SESSION['akun'])) : ?>
						<div class="block1 wrap-pic-w">
							<img src="images/dnm-37.webp" alt="IMG-BANNER">

							<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Lubricant
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php else : ?>
						<div class="block1 wrap-pic-w js-show-modal-search">
							<img src="images/dnm-37.webp" alt="IMG-BANNER">

							<a class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Lubricant
									</span>

									<span class="block1-info stext-102 trans-04">
										All Collections
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					<?php endif ?>
				</div>
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block3 -->
					<div class="block3 wrap-pic-w">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/7Ron6MN45LY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

						<a href="https://www.youtube.com/watch?v=7Ron6MN45LY" class="block3-txt ab-t-l s-full flex-col-l-sb p-lr-50 p-tb-50 trans-03 respon3">
							<div class="block3-txt-child1 flex-col-l">
								<span class="block3-name ltext-102 trans-04 p-b-8">
									Rubik's Cube Tutorial
								</span>

								<span class="block3-info stext-102 trans-04">
									English
								</span>
							</div>

							<div class="block3-txt-child2 p-b-4 trans-05">
								<div class="block3-link stext-101 cl0 trans-09">
									Watch Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block3 -->
					<div class="block3 wrap-pic-w">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/-Wxrs4MbiFc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

						<a href="https://www.youtube.com/watch?v=-Wxrs4MbiFc" class="block3-txt ab-t-l s-full flex-col-l-sb p-lr-50 p-tb-50 trans-03 respon3">
							<div class="block3-txt-child1 flex-col-l">
								<span class="block3-name ltext-102 trans-04 p-b-8">
									Tutorial Rubik
								</span>

								<span class="block3-info stext-102 trans-04">
									Bahasa Indonesia
								</span>
							</div>

							<div class="block3-txt-child2 p-b-4 trans-05">
								<div class="block3-link stext-101 cl0 trans-09">
									Watch Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


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


	<?php

	if (isset($_POST["submit"])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$ambil = $koneksi->query("select * from akun where username = '$username' and password = '$password'");
		$pecah = $ambil->fetch_assoc();
		$status = $pecah["status"];
		$ygcocok = $ambil->num_rows;

		if ($ygcocok == 1) {
			$_SESSION["akun"] = $pecah;

			if ($status == '1') {

				echo "<script>alert('Login Sukses, Selamat Datang Admin');</script>";
				echo "<script>location='admin.php'</script>";
			} elseif ($status == '0') {

				echo "<script>alert('Login Sukses, Selamat Datang');</script>";
				echo "<script>location='product.php'</script>";
			} else {
				echo "<script>alert('Login Gagal');</script>";
				echo "<script>location='index.php'</script>";
			}
		} else {
			echo "<script>alert('Login Gagal');</script>";
			echo "<script>location='index.php'</script>";
		}
	}
	?>


	<!-- Modal1 -->

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
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function() {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>