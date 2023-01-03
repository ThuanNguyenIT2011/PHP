<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="icon" href="public/img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="public/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="public/vendors/fontawesome/css/all.min.css">
  <!-- <link rel="stylesheet" href="../"> -->
	<link rel="stylesheet" href="public/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="public/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="public/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="public/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/style.css">

  <script src="public/js/jquery-3.6.1.min.js"></script>
  <script src="public/js/void_main.js"></script>
  
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="?pages=home"><img src="public/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="?mode=home&act=home&id=1">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <!-- <li class="nav-item"><a class="nav-link" href="?page=category_laptop">Shop Laptop</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=category_phone">Shop Phone</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=category_macbook">Shop MacBook</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=single-product">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=checkout">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=confirmation">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="?page=cart">Shopping Cart</a></li> -->

                  <li class="nav-item"><a class="nav-link" href="?mod=product&act=main&cat_id=3">Shop Laptop</a></li>
                  <li class="nav-item"><a class="nav-link" href="?mod=product&act=main&cat_id=1">Shop Phone</a></li>
                  <li class="nav-item"><a class="nav-link" href="?mod=product&act=main&cat_id=2">Shop MacBook</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="?mod=home&act=single-product">Product Details</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="?mod=home&act=checkout">Product Checkout</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="?mod=home&act=confirmation">Confirmation</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="?mod=home&act=cart">Shopping Cart</a></li> -->
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="?mod=post&act=blog">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="?mod=post&act=single-blog">Blog Details</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="?mod=pages&act=login">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="?mod=pages&act=register">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="?mod=pages&act=tracking-order">Tracking</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="?mod=pages&act=contact">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button onclick="location.href='?mod=cart&act=cart'"><i class="ti-shopping-cart"></i><span class="nav-shop__circle">
              <?php
              $num_cart = get_number_cart();
              if($num_cart > 0) {echo $num_cart; } else { echo ''; } 
              ?>
              </span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>


