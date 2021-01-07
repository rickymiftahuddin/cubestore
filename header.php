	<!-- Header desktop -->
    <div class="container-menu-desktop">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop container">
				
				<!-- Logo desktop -->		
				<a href="#" class="logo">
					<img src="images/icons/cubestore-01.png" alt="IMG-LOGO">
				</a>

                <!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li>
							<a href="index.php">Home</a>
						</li>

                        <?php if (isset($_SESSION['akun'])): ?>
                        <li class="cl2 hov-cl1">
							<a href="product.php">Shop</a>
                        </li>
                        <?php else: ?>
                        <li class="cl2 hov-cl1 js-show-modal-search">
							<a>Shop</a>
                        </li>
                        <?php endif ?>

                        <li>
							<a href="https://www.worldcubeassociation.org/competitions">Competition</a>
						</li>
						
						<?php if (isset($_SESSION['akun'])): ?>
						<li>
							<a href="history.php">History</a>
						</li>
						<?php else: ?>
						<li>
						</li>
						<?php endif ?>
					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<?php if (isset($_SESSION['keranjang'])): ?>
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-15 js-show-cart">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
					<?php endif ?>

                    <?php if (isset($_SESSION['akun'])): ?>
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-15">
						<a href="logout.php" class="cl2 hov-cl1 trans-04"><i class="fas fa-sign-out-alt" title="Sign Out"></i></a>
                    </div>
                    <?php endif ?>
				</div>
			</nav>
		</div>	
	</div>