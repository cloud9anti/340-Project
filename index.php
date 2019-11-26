<?php
// Initialize the session
session_start();
//session_cache_limiter(FALSE); 

if(isset($_SESSION["loggedin"]) && $_SESSION["admin"] == "supplier"){
    header("location: supplier/index.php");
    exit;
}
if(isset($_SESSION["loggedin"]) && $_SESSION["admin"] == "admin"){
    header("location: admin/index.php");
    exit;
}

 

require 'conndb.php';

//Include people table
$sql = 'SELECT * FROM people WHERE active="Active"';

$result = mysqli_query($connection,$sql);

//$statement = $connection->prepare($sql);
//$statement->execute();
//$people = $statement->mysqli_fetch_all(PDO::FETCH_OBJ);

$people = mysqli_fetch_array($result, MYSQLI_ASSOC);





//Include groups table
$sql = 'SELECT DISTINCT groups FROM products';

$result = mysqli_query($connection,$sql);

$productGroups = mysqli_fetch_array($result, MYSQLI_BOTH);


//Include area table
$sql = 'SELECT DISTINCT groups FROM people';

$result = mysqli_query($connection,$sql);

$areaGroups = mysqli_fetch_array($result, MYSQLI_BOTH);

//Include community table
$sql = 'SELECT DISTINCT community FROM people';

$result = mysqli_query($connection,$sql);

$communityGroups = mysqli_fetch_array($result, MYSQLI_BOTH);

//Include category table
$sql = 'SELECT DISTINCT category FROM products';

$result = mysqli_query($connection,$sql);

$categoryGroups = mysqli_fetch_array($result, MYSQLI_BOTH);

//Include subcategory table
$sql = 'SELECT DISTINCT subcategory FROM products';

$result = mysqli_query($connection,$sql);

$subcategoryGroups = mysqli_fetch_array($result, MYSQLI_BOTH);



 ?>


<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eB - Electronics eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
    ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- Cart Table -->
 

    <!-- Header Section Start -->
    <div class="header-section section">

        <!-- Header Top Start -->
        <div class="header-top header-top-one header-top-border pt-10 pb-10">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col mt-10 mb-10">
                        <!-- Header Links Start -->
                        <div class="header-links">
                            <a href="track-order.html"><img src="assets/images/icons/car.png" alt="Car Icon"> <span>Track your order</span></a>
                            <a href="store.html"><img src="assets/images/icons/marker.png" alt="Car Icon"> <span>Locate Store</span></a>
                        </div><!-- Header Links End -->
                    </div>

                    <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                        <!-- Header Advance Search Start -->
                        <div class="header-advance-search">

                            <form action="#">
                                <div class="input"><input type="text" placeholder="Search your product"></div>
                                <div class="select">
                                    <select class="nice-select">
                                        <option>All Categories</option>
                                        <option>Mobile</option>
                                        <option>Computer</option>
                                        <option>Laptop</option>
                                        <option>Camera</option>
                                    </select>
                                </div>
                                <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                            </form>

                        </div><!-- Header Advance Search End -->
                    </div>

                    <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                        <!-- Header Account Links Start -->
                        <div class="header-account-links">
                            <a href="login.php"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
                            <a href="orders.php"><i class="icofont icofont-login d-none"></i> <span>ORDERS</span></a>
				<a href="logout.php"><img style="width:24px; height:24px;" src="images/logout.png"></a>
                      
                        </div><!-- Header Account Links End -->
                    </div>

                </div>
            </div>
        </div><!-- Header Top End -->
        <!-- Header Bottom Start -->
        <div class="header-bottom header-bottom-one header-sticky">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="eB - Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="assets/images/logo-light.png" alt="eB - Electronics eCommerce Bootstrap4 HTML Template">
                            </a>
                        </div><!-- Logo End -->
                    </div>

                    <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                        <!-- Main Menu Start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">HOME</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="shop-grid.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop-grid.html">shop grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-grid.html">shop grid</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="single-product.html">Single Product</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single-product.html">Single Product 1</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">PAGES</a>
                                        <ul class="mega-menu three-column">
                                            <li>
                                                <a href="#">Column One</a>
                                                <ul>
                                                    <li><a href="about-us.html">About us</a></li>
                                                    <li><a href="best-deals.html">Best Deals</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column Two</a>
                                                <ul>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="feature.html">Feature</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="store.html">Store</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column Three</a>
                                                <ul>
                                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                    <li><a href="track-order.html">Track Order</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="blog-1-column-left-sidebar.html">BLOG</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-1-column-left-sidebar.html">Blog 1 Column Left Sidebar</a></li>
                                            <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div><!-- Main Menu End -->
                    </div>

                    <div class="col order-2 order-lg-12 order-xl-12">
                        <!-- Header Shop Links Start -->
                        <div class="header-shop-links">

                            <!-- Compare -->
                            <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                            <!-- Wishlist -->
                            <a href="wishlist.html" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a>
                            <!-- Cart -->
                            <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">3</span></a>

                        </div><!-- Header Shop Links End -->
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div><!-- Header Bottom End -->
        <!-- Header Category Start -->
        <div class="header-category-section">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Header Category -->
                        <div class="header-category">

                            <!-- Category Toggle Wrap -->
                            <div class="category-toggle-wrap d-block d-lg-none">
                                <!-- Category Toggle -->
                                <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                            </div>

                            <!-- Category Menu -->
                            <nav class="category-menu">
                                <ul>
                                    <li><a href="category-1.html">Tv & Audio System</a></li>
                                    <li><a href="category-2.html">Computer & Laptop</a></li>
                                    <li><a href="category-3.html">Phones & Tablets</a></li>
                                    <li><a href="category-1.html">Home Appliances</a></li>
                                    <li><a href="category-2.html">Kitchen appliances</a></li>
                                    <li><a href="category-3.html">Accessories</a></li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Header Category End -->

    </div><!-- Header Section End -->
    <!-- Mini Cart Wrap Start -->
    <div class="mini-cart-wrap">

        <!-- Mini Cart Top -->
        <div class="mini-cart-top">

            <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

        </div>

        <!-- Mini Cart Products -->
        <ul class="mini-cart-products">
            <li>
                <a class="image"><img src="assets/images/product/product-1.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                    <span class="price">Price: $295</span>
                    <span class="qty">Qty: 02</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
            <li>
                <a class="image"><img src="assets/images/product/product-2.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Aquet Drone D 420</a>
                    <span class="price">Price: $275</span>
                    <span class="qty">Qty: 01</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
            <li>
                <a class="image"><img src="assets/images/product/product-3.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Game Station X 22</a>
                    <span class="price">Price: $295</span>
                    <span class="qty">Qty: 01</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
        </ul>

        <!-- Mini Cart Bottom -->
        <div class="mini-cart-bottom">

            <h4 class="sub-total">Total: <span>$1160</span></h4>

            <div class="button">
                <a href="checkout.html">CHECK OUT</a>
            </div>

        </div>

    </div><!-- Mini Cart Wrap End -->
    <!-- Cart Overlay -->
    <div class="cart-overlay"></div>

    <!-- Hero Section Start -->
    <div class="hero-section section mb-30">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Hero Slider Start -->
                    <div class="hero-slider hero-slider-one">

                        <!-- Hero Item Start -->
                        <div class="hero-item">
                            <div class="row align-items-center justify-content-between">

                                <!-- Hero Content -->
                                <div class="hero-content col">

                                    <h2>HURRY UP!</h2>
                                    <h1><span>uPhone X</span></h1>
                                    <h1>IT’S <span class="big">29%</span> OFF</h1>
                                    <a href="#">get it now</a>

                                </div>

                                <!-- Hero Image -->
                                <div class="hero-image col">
                                    <img src="assets/images/hero/hero-1.png" alt="Hero Image">
                                </div>

                            </div>
                        </div><!-- Hero Item End -->
                        <!-- Hero Item Start -->
                        <div class="hero-item">
                            <div class="row align-items-center justify-content-between">

                                <!-- Hero Content -->
                                <div class="hero-content col">

                                    <h2>HURRY UP!</h2>
                                    <h1><span>GL G6</span></h1>
                                    <h1>IT’S <span class="big">35%</span> OFF</h1>
                                    <a href="#">get it now</a>

                                </div>

                                <!-- Hero Image -->
                                <div class="hero-image col">
                                    <img src="assets/images/hero/hero-2.png" alt="Hero Image">
                                </div>

                            </div>
                        </div><!-- Hero Item End -->
                        <!-- Hero Item Start -->
                        <div class="hero-item">
                            <div class="row align-items-center justify-content-between">

                                <!-- Hero Content -->
                                <div class="hero-content col">

                                    <h2>HURRY UP!</h2>
                                    <h1><span>MSVII Case</span></h1>
                                    <h1>IT’S <span class="big">15%</span> OFF</h1>
                                    <a href="#">get it now</a>

                                </div>

                                <!-- Hero Image -->
                                <div class="hero-image col">
                                    <img src="assets/images/hero/hero-3.png" alt="Hero Image">
                                </div>

                            </div>
                        </div><!-- Hero Item End -->

                    </div><!-- Hero Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->
    <!-- Banner Section Start -->
    <div class="banner-section section mb-60">
        <div class="container">
            <div class="row row-10">

                <!-- Banner -->
                <div class="col-md-8 col-12 mb-30">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-1.jpg" alt="Banner"></a></div>
                </div>

                <!-- Banner -->
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-2.jpg" alt="Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->


             
    <!-- Best Sell Product Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="BEST SELLER"><h1>BEST SELLERS</h1></div>
                </div><!-- Section Title End -->

                <div class="col-12">
                    <div class="row">

						<?php 

						//Include products table
						$sql = 'SELECT * FROM products';

						$result = mysqli_query($connection,$sql);

						//$products = mysqli_fetch_array($result, MYSQLI_ASSOC);

						while ($products= mysqli_fetch_array($result)) {

						?>
						
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                            <!-- Product Start -->

						
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">
								
								<form id="<?= $products['Product_ID']?>" method="post" action="item.php" >
								<input type="hidden" name="Product_ID" value="<?= $products['Product_ID']?>"> 
								<a onclick="document.getElementById('<?= $products['Product_ID']?>').submit();"class="img"><img src="images/paper.jpg" alt="Product Image"></a>
								</form>
								

									
								<form method="post" action = "cart.php?action=addcart"> 

								  <p style="text-align:center;color:#04B745;">

									<button type="submit" method="post" href="cart.php?action=addcart"  class="btn btn-warning">Add To Cart</button>

									<input type="hidden" name="Product_ID" value="<?= $products['Product_ID']?>">

								  </p>

								</form>
								
                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                             

                                </div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Category & Title -->
                                    <div class="category-title">

                                        <a href="#" class="cat">Camera</a>
                                        <h5 class="title"><a href="cart.php"><?php echo $products['name']; ?></a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price"> $<?php echo $products['price']; ?></h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
							
                       			
                    </div>
					<?php } ?>

                </div>

            </div>
        </div>
    </div><!-- Best Sell Product Section End -->
    <!-- Banner Section Start -->
    <div class="banner-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Banner -->
                <div class="col-12">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-3.jpg" alt="Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->
    <!-- Feature Section Start -->
    <div class="feature-section section mb-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature feature-shipping">
                        <div class="feature-wrap">
                            <div class="icon"><img src="assets/images/icons/feature-van.png" alt="Feature"></div>
                            <h4>FREE SHIPPING</h4>
                            <p>Start from $100</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature feature-guarantee">
                        <div class="feature-wrap">
                            <div class="icon"><img src="assets/images/icons/feature-walet.png" alt="Feature"></div>
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>Back within 15 days</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature feature-security">
                        <div class="feature-wrap">
                            <div class="icon"><img src="assets/images/icons/feature-shield.png" alt="Feature"></div>
                            <h4>SECURE PAYMENTS</h4>
                            <p>Payment Security</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->
	
	
  
    <!-- Banner Section Start -->
    <div class="banner-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Banner -->
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-4.jpg" alt="Banner"></a></div>
                </div>

                <!-- Banner -->
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-5.jpg" alt="Banner"></a></div>
                </div>

                <!-- Banner -->
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner"><a href="#"><img src="assets/images/banner/banner-6.jpg" alt="Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->
    <!-- Brands Section Start -->
    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="assets/images/brands/brand-1.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-2.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-3.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-4.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-5.png" alt="Brands"></div>
                </div><!-- Brand Slider End -->

            </div>
        </div>
    </div><!-- Brands Section End -->
    
    <!-- Footer Section Start -->
    <div class="footer-section section bg-ivory">

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section pt-90 pb-50">
            <div class="container">

                <!-- Footer Widget Start -->
                <div class="row">
                    <div class="col mb-90">
                        <div class="footer-widget text-center">
                            <div class="footer-logo">
                                <img src="assets/images/logo.png" alt="eB - Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="assets/images/logo-light.png" alt="eB - Electronics eCommerce Bootstrap4 HTML Template">
                            </div>
                            <p>Electronics product actual teachings of  he great explorer of the truth, the malder of human happiness. No one rejects</p>
                        </div>
                    </div>
                </div><!-- Footer Widget End -->

                <div class="row">

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CONTACT INFO</h4>

                            <p class="contact-info">
                                <span>Address</span>
                                You address will be here <br>
                                Lorem Ipsum text
                            </p>

                            <p class="contact-info">
                                <span>Phone</span>
                                <a href="tel:01234567890">01234 567 890</a>
                                <a href="tel:01234567891">01234 567 891</a>
                            </p>

                            <p class="contact-info">
                                <span>Web</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <a href="#">www.example.com</a>
                            </p>

                        </div>
                    </div><!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CUSTOMER CARE</h4>

                            <ul class="link-widget">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                        </div>
                    </div><!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">INFORMATION</h4>

                            <ul class="link-widget">
                                <li><a href="#">Track your order</a></li>
                                <li><a href="#">Locate Store</a></li>
                                <li><a href="#">Online Support</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">Gift coupon</a></li>
                                <li><a href="#">Special coupon</a></li>
                            </ul>

                        </div>
                    </div><!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">LATEST TWEET</h4>

                            <div class="footer-tweet"></div>

                        </div>
                    </div><!-- Footer Widget End -->

                </div>

            </div>
        </div><!-- Footer Bottom Section Start -->
        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-section section">
            <div class="container">
                <div class="row">

                    <!-- Footer Copyright -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-copyright"><p>&copy; Copyright, 2018 All Rights Reserved by <a href="http://ebusinessthailand.com/">Electronic Business Co., Ltd.</a></p></div>
                    </div>

                    <!-- Footer Payment Support -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-payments-image"><img src="assets/images/payment-support.png" alt="Payment Support Image"></div>
                    </div>

                </div>
            </div>
        </div><!-- Footer Bottom Section Start -->

    </div><!-- Footer Section End -->
    
    <!-- JS
    ============================================ -->
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>