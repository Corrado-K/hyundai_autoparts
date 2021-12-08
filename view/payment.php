
<?php
include '../settings/core.php';
require '../controller/cartController.php';

if (isset($_SESSION['user_id'])) {
    $c_email = $_SESSION['email'];
} else {
    check_login();
}
if (isset($_GET['total'])) {
    $amount = $_GET['total'];
}else {
    header('location: ./checkout.php');
}

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
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/nouislider.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="../index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
									<!-- <li class="nav-item"><a class="nav-link" href="single-product.php">Product Details</a></li> -->
									<li class="nav-item active"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
								</ul>
							</li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.php">Elements</a></li>
								</ul>
							</li> -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="./cart.php" class="nav-link h-100 mt-1"><i class="fas fa-cart-plus"></i></a></li>
							<!-- <li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li> -->
                            <?php 
							if(isset($_SESSION['user_id'])) {
								echo '<li class="nav-item mt-1"><a class="nav-link h-100" href="../action/customerAction.php?logout='.$_SESSION["user_id"].'"><i class="fas fa-right-from-bracket"></i>&nbspLogout</a></li>';
							}else {
								echo '<li class="nav-item mt-1"><a class="nav-link h-100" href="../login/login.php"><i class="fas fa-right-to-bracket"></i>&nbspLogin</a></li>';
							}
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="../index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.php">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <h3 class="text-center">Payment details</h3>
                        <form class="row contact_form" id="paymentForm" action="#" method="post" novalidate="novalidate">
                            
                            <div class="col-md-12  form-group">
                                <input type="email" class="form-control" id="email-address" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="Email address">
                            </div>
                            
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" value="<?php echo $amount; ?>"> 
                            </div>  
                            
                            <div class="col-md-6 mx-auto form-group p_star">
                            <button type="button" class="primary-btn w-100" onclick="payWithPaystack()">Pay</button>

                          </div> 
                            
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

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


    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/nouislider.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../js/gmaps.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="../js/payment.js"></script>
</body>

</html>