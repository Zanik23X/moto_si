<?php
include 'connect_db.php';
$conn = OpenConn();

$sql = "SELECT * FROM produckt";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    $produckts = mysqli_fetch_all($result,"MYSQLI-BOTH");
}
?>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Lukas - Car Parts Store eCommerce HTML Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">

    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link href="assets/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link href="assets/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link href="assets/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link href="assets/css/helper.min.css" rel="stylesheet" />
    <!-- endbuild -->

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


    <!--== Start Header Area ==-->
    <header class="header-area">
        <div class="container container-wide">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-2">
                    <div class="site-logo text-center text-sm-left">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
                    </div>
                </div>

                <div class="col-lg-7 d-none d-lg-block">
                    <div class="site-navigation">
                        <ul class="main-menu nav">
                            <li class="has-submenu"><a href="shop.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="has-submenu"><a href="index.html">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-8 col-lg-3">
                    <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">
                        <ul class="login-reg-nav nav">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>

                        <div class="mini-cart-wrap">
                            <a href="cart.html" class="btn-mini-cart">
                                <i class="ion-bag"></i>
                                <span class="cart-total">3</span>
                            </a>

                            <div class="mini-cart-content">
                                <div class="mini-cart-product">
                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-1.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html"><?php echo produckt["name"] ?></a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-2.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-3.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="responsive-menu d-lg-none">
                            <button class="btn-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Area ==-->

    <!--== Start Slider Area Wrapper ==-->
    <div class="slider-area-wrapper">
        <div class="slider-content-active">
            <div class="slider-slide-item bg-img" data-bg="assets/img/slider/slider-1.jpg">
                <div class="container container-wide h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="slide-content">
                                <div class="slide-content-inner">
                                    <h3>Легко и быстро</h3>
                                    <h2>Мотоцклы &amp; Мото бренды</h2>
                                    <a class="btn btn-white" href="shop.html">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-slide-item bg-img" data-bg ="assets/img/slider/slider-2.jpg">
                <div class="container container-wide h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-12">
                            <div class="slide-content">
                                <div class="slide-content-inner">
                                    <h3>ТЕХНОЛОГИЧНЫЕ МОДЕЛИ</h3>
                                    <h2>КАЧЕСТВО &amp; ДИЗАЙН <br> </h2>
                                        <a class="btn btn-white" href="shop.html">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Slider Area Wrapper ==-->

    <!--== Start Banner Area Wrapper ==-->
    <div class="banner-area-wrapper banner-mt">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-1.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-2.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-3.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Banner Area Wrapper ==-->

    <!--== Start Call to Action Area ==-->
    <div class="call-to-action-area sm-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item mt-0">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-1.png" alt="fast delivery">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Free Home Delivery</h3>
                            <p>Provide free home delivery
                                for all product over $100</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-2.png" alt="quality">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Quality Products</h3>
                            <p>We ensure our product
                                quality all times</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-3.png" alt="return">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Online Support</h3>
                            <p>To satisfy our customer we try
                                to give support online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to Action Area ==-->

    <!--== Start Best Seller Products Area ==-->
    <div class="best-seller-products-area sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">Бестцелер</h2>
                        <p>Все товары бестселлеров теперь доступны для вас, и вы можете купить этот товар здесь в любое время и в любом месте, так что делайте покупки прямо сейчас</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper">
                        <div class="product-carousel">
                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-1.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-2.png" alt="Product" />
                                    </a>
                                </div

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html"><?php echo produckt["name"] ?></a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-3.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Leather Steering Wheel</a></h4>
                                    <span class="price"><strong>Price:</strong> $615.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-4.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-5.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Hanging 4K Camera</a></h4>
                                    <span class="price"><strong>Price:</strong> $65.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">35%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-2.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-1.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">17 inch Rims 8 Lug</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-5.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Locking Hub Diagram</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">21%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Best Seller Products Area ==-->

    <!--== Start Call to action Wrapper ==-->
    <div class="call-to-action-area">
        <div class="call-to-action-content-area bg-img" data-bg="assets/img/bg/bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="call-to-action-txt">
                            <h2>ТОВАРЫ НА ЛЮБОЙ ВКУС<br>РАЗНОЙ ВАРИАЦИЙ</h2>
                                <a href="shop.html" class="btn btn-brand">КУПИТЬ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="assets/img/bg/bg-car.png" alt="Car" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to action Wrapper ==-->

    <!--== Start Promotion Code Banner Area ==-->
    <div class="promotion-code-area-wrapper sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6">
                    <div class="promotion-code-banner-item mb-sm-30">
                        <img src="assets/img/banner/banner-5.jpg" alt="Banner" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="promotion-code-banner-item">
                        <img src="assets/img/banner/banner-6.jpg" alt="Banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Promotion Code Banner Area ==-->

    <!--== Start Products Area Wrapper ==-->
    <div class="products-area-wrapper sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">ОБЩЕЕ</h2>
                        <p>хотите что то проибрости,выбирайте из этого\/</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper columns-5">
                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-6.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-7.png" alt="Product" />
                                    </a>
                                </div>
                                <body>
                                <?php
                                foreach ($produckts as $product){
                                    echo'<div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html"> <?php echo produckt["name"] ?> </a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>';
                                }
                                ?>


                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-8.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-9.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Leather Steering Wheel</a></h4>
                                    <span class="price"><strong>Price:</strong> $615.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-7.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-14.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Hanging 4K Camera</a></h4>
                                    <span class="price"><strong>Price:</strong> $65.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">35%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-10.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-5.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">17 inch Rims 8 Lug</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-11.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Locking Hub Diagram</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">21%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-13.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-12.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Hanging 4K Camera</a></h4>
                                    <span class="price"><strong>Price:</strong> $65.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">35%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-14.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-8.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">17 inch Rims 8 Lug</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-15.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Locking Hub Diagram</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">21%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-12.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-2.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-9.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Leather Steering Wheel</a></h4>
                                    <span class="price"><strong>Price:</strong> $615.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Products Area Wrapper ==-->

    <!--== Start Flash Deals Area ==-->
    <div class="flash-deals-area bg-img" data-bg="assets/img/bg/deal-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 m-auto">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-6">
                            <div class="flash-deals-thumb text-center text-md-left">
                                <img src="assets/img/extra/wheels.png" alt="Deals" />
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-6 text-center">
                            <div class="flash-deals-content">
                                <h2>FLASH CДЕЛКИ</h2>
                                <h3>ВРЕМЕНАЯ СКИДКА В 25%</h3>
                                <a href="cart.html" class="btn btn-brand">Add to cart</a>

                                <div class="deals-countdown-area">
                                    <div class="ht-countdown" data-date="9/20/2019"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Flash Deals Area ==-->

    <!--== Start Newsletter Area ==-->
    <div class="newsletter-area-wrapper">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="assets/img/bg/newsletter-bg.jpg">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 m-auto">
                        <div class="newsletter-content text-center">
                            <h4>СПЕЦ <span>ПРЕДЛОЖЕНИЯ</span> ДЛЯ ПОДПИШШИКОВ</h4>
                            <h2>ПОДПЕШИШ НА РАСЫЛКУ НОВОСТЕЙ</h2>
                            <p>Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers</p>

                                <div class="newsletter-form-wrap">
                                    <form action="#" method="post">
                                        <div class="form-content">
                                            <input type="email" placeholder="Enter your email here" />
                                            <button class="btn-newsletter">Submit</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Newsletter Area ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area sm-top sm-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo-content">
                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-2.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-4.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-5.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container container-wide">
                <div class="row mtn-40">
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <div class="about-widget">
                                <a href="index.html"><img src="assets/img/logo-light.png" alt="Logo" /></a>
                                <p>Lukas is the best parts shop for your car
                                    accessories. What kind of parts do you
                                    need you can get here soluta nobis</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-item">
                            <h4 class="widget-title">Information</h4>
                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="#">Our company</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Our services</a></li>
                                    <li><a href="#">Why We?</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-item">
                            <h4 class="widget-title">Quicklink</h4>
                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Cart</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-item">
                            <h4 class="widget-title">Support</h4>
                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Online Support</a></li>
                                    <li><a href="#">Money Back</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget-item">
                            <h4 class="widget-title">Store Information</h4>
                            <div class="widget-body">
                                <address>
                                    2005 Stokes Isle Apartment. 896, Washington 10010, USA <br>
                                https://example.com <br>
                                (+68) 120034509
                            </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p>Copyright © 2019 Lukas. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll Top Button -->
    <button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>



    <!--== Start Responsive Menu Wrapper ==-->
    <aside class="off-canvas-wrapper off-canvas-menu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content">
                <div class="off-canvas-header">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="close-btn">
                        <button class="btn-close"><i class="ion-android-close"></i></button>
                    </div>
                </div>

                <!-- Content Auto Generate Form Main Menu Here -->
                <div class="res-mobile-menu mobile-menu">

                </div>
            </div>
        </div>
    </aside>
    <!--== End Responsive Menu Wrapper ==-->


    <!--=======================Javascript============================-->
    <!-- build:js assets/js/app.min.js -->
    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--=== Slick Slider Min Js ===-->
    <script src="assets/js/slick.min.js"></script>
    <!--=== Nice Select Min Js ===-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--=== Leaflet Min Js ===-->
    <script src="assets/js/leaflet.min.js"></script>
    <!--=== Countdown Js ===-->
    <script src="assets/js/countdown.js"></script>

    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>
    <!-- endbuild -->

</body>

</html>