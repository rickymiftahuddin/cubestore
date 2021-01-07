<?php
include 'koneksi.php';
?>
<!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah): ?>
				<?php
                	$ambil = $koneksi->query("SELECT * from barang where id_barang= '$id_barang'");
                	$pecah = $ambil->fetch_assoc();
					$total = $pecah['harga']*$jumlah;
					$totalharga = 0;
					$totalharga+= $total;
					$kurir = 3;
                ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/products/<?php echo $pecah['foto1']; ?>" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                <?php echo $pecah['nama_barang']; ?>
							</a>

							<span class="header-cart-item-info">
                                <?php echo $jumlah ?> x $<?php echo $pecah['harga']; ?>
							</span>
						</div>
					</li>
                <?php endforeach ?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $<?php echo $totalharga ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>