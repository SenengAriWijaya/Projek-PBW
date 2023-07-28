<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template>

	<!-- title -->
	<title>Home</title>

	<!-- favicon -->
	<link rel=" shortcut icon" type="image/png" href="/assets/img/Logo2.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="<?php echo site_url('/'); ?>">
                                <img src="/assets/img/Logo2.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item "><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('About'); ?>">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('About'); ?>">About</a></li>
                                        <li><a href="<?php echo site_url('Cart'); ?>">Cart</a></li>
                                        <li><a href="<?php echo site_url('Checkout'); ?>">Check Out</a></li>
                                        <li><a href="<?php echo site_url('Contact'); ?>">Contact</a></li>
                                        <li><a href="<?php echo site_url('Shop'); ?>">Product</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?php echo site_url('Contact'); ?>">Contact</a></li>
                                <li><a href="<?php echo site_url('Shop'); ?>">Product</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('Shop'); ?>">Product</a></li>
                                        <li><a href="<?php echo site_url('Checkout'); ?>">Check Out</a></li>
                                        <!-- <li><a href="<?php echo site_url('Single_Product'); ?>">Single Product</a></li> -->
                                        <li><a href="<?php echo site_url('Cart'); ?>">Cart</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('Login'); ?>" class="boxed-btn" style="width: 100px; margin-left:30px;">Login</a></li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="<?php echo site_url('Cart'); ?>"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="Login-menu" href="<?php echo site_url('Profile'); ?>"><i class="fas fa-user"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->