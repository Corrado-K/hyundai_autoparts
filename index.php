<?php 

session_start(); 

?>



<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="./view/category.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="./view/category.php">Shop Category</a></li>
									<!-- <li class="nav-item d-none"><a class="nav-link" href="./view/single-product.php">Product Details</a></li> -->
									<li class="nav-item"><a class="nav-link" href="./view/checkout.php">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="./view/cart.php">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="./view/confirmation.php">Confirmation</a></li>
								</ul>
							</li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="./view/tracking.php">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="./view/elements.php">Elements</a></li>
								</ul>
							</li> -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="./view/cart.php" class="nav-link h-100 mt-1"><i class="fas fa-cart-plus"></i></a></li>
							<!-- <li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li> -->
							<?php 
							if(isset($_SESSION['user_id'])) {
								echo '<li class="nav-item mt-1"><a class="nav-link h-100" href="./action/customerAction.php?logout='.$_SESSION["user_id"].'"><i class="fas fa-right-from-bracket"></i>&nbspLogout</a></li>';
							}else {
								echo '<li class="nav-item mt-1"><a class="nav-link h-100" href="./login/login.php"><i class="fas fa-right-to-bracket"></i>&nbspLogin</a></li>';
							}
							?>

						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Hyundai <br>Automobiles!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<!-- <div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div> -->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-image.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Hyundai<br>Autoparts!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<!-- <div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div> -->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-image2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12 d-flex">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/venue-qx-preview-quarter-view-v2.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/venue-qx-preview-quarter-view-v2.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">SUVs</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/santa-fe-tm-hev-fl-quater-view-taiga-brown.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/santa-fe-tm-hev-fl-quater-view-taiga-brown.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Ecos</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/i30-fastback-n-quater-view.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/i30-fastback-n-quater-view.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sedans</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/veloster-js-quarter-view-ignite-flame-pc.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/veloster-js-quarter-view-ignite-flame-pc.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sedan</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/elantra-n-quater-view-thumb_performance-blue.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/elantra-n-quater-view-thumb_performance-blue.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">All new Elantra</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/h1-tq-quarter-view-white-pc.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/h1-tq-quarter-view-white-pc.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Commercials</h6>
									</div>
								</a>
							</div>
						</div>
						<!-- <div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/staria-us4-fmc-quater-view-thumb.png" alt="">
								<a href="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/staria-us4-fmc-quater-view-thumb.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">MPVs</h6>
									</div>
								</a>
							</div>
						</div> -->
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Latest Hyundai Cars</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/azera-ig-fl-quater-view-oxford-blue.png" alt="">
							<div class="product-details">
								<h6>Hyundai Azera</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/sonata-dn8-quater-view.png" alt="">
							<div class="product-details">
								<h6>Hyundai Sonata</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/ioniq5-ne-wp-quater-view.png" alt="">
							<div class="product-details">
								<h6>Hyundai Ioniq 5</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/elantra-cn7-quater-view-intense-blue.png" alt="">
							<div class="product-details">
								<h6>Hyundai Elantra</h6>
								
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/palisade-lx2-quater-view-moonlight-cloud.png" alt="">
							<div class="product-details">
								<h6>Hyundai Palisade</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/tucson-nx4-quater-view.png" alt="">
							<div class="product-details">
								<h6>Hyundai Tucson</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/kona-os-pe-quater-view-thumb.png" alt="">
							<div class="product-details">
								<h6>Hyundai Kona</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://www.hyundai.com/content/dam/hyundai/ww/en/images/find-a-car/all-vehicles/creta-su2-creta-quater-view-polar-white.png" alt="">
							<div class="product-details">
								<h6>Hyundai Creta</h6>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Inventory</h1>
							<p>The parts you see could be sold on the site but may be out of stock</p>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=23" alt="">
							<div class="product-details">
								<h6>Brake pad</h6>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=9" alt="">
							<div class="product-details">
								<h6>Head lamp</h6>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=72" alt="">
							<div class="product-details">
								<h6>Speedometer</h6>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=27" alt="">
							<div class="product-details">
								<h6>Radiator</h6>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=35" alt="">
							<div class="product-details">
								<h6>Muffler Assay</h6>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=19" alt="">
							<div class="product-details">
								<h6>Shock absorber</h6>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=74" alt="">
							<div class="product-details">
								<h6>Strut</h6>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="https://hyundaimobisin.com/api/service/parts/download-part?imageId=13" alt="">
							<div class="product-details">
								<h6>Air cleaner assembly</h6>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>