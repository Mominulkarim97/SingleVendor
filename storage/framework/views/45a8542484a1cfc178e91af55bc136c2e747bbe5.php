<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="robots" content="index, follow"/>
    <title>Deutsche Vision - Camera Gear Rental Shop</title>
    <meta name="description" content="Mioca - Camera Gear Rental Shop"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon/favicon.ico')); ?>" type="image/png">


    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.bundle.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/pe-icon-7-stroke.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/font.awesome.css')); ?>"/>

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper-bundle.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/jquery-ui.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/nice-select.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/venobox.css')); ?>"/>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/vendor.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/plugins.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>"> -->

    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>"/>

</head>

<body>


<!-- Header Area Start -->
<header>
    <div class="header-main sticky-nav ">
        <div class="container position-relative">
            <div class="row">
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/images/logo/logo-white.png')); ?>" alt="Site Logo" width="100px"
                                                  height="80px"/></a>
                    </div>
                </div>
                <div class="col align-self-center d-none d-lg-block">
                    <div class="main-menu">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

                            <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                            <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>


                            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action Start -->
                <div class="col col-lg-auto align-self-center pl-0">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                            <i class="pe-7s-search"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <div class="header-bottom-set dropdown">
                            <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                    class="pe-7s-users"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                            </ul>
                        </div>
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart"
                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0" onclick="cart.showCart()">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
<div class="offcanvas-overlay"></div>

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/hero01.png"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Hand-Made Garlic Mortar</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Handmade Ceramic Pottery</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Hand Painted Bowls</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>

        <div class="body customScroll">
            <ul class="minicart-product-list">

            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>

    <div class="inner customScroll">

        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="index.html">Home</a></li>

                <li><a href="about.html">About</a></li>
                <li><a href="shop.html">Shop</a></li>


                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->

<?php echo $__env->yieldContent('content'); ?>

<div class="newsletter-area ">
    <div class="container line-shape-bottom">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content mb-lm-30px">
                    <i class="pe-7s-mail-open-file"></i>
                    <div class="newsletter-text">
                        <h3 class="title">Newsletter & Get Updates</h3>
                        <p>Sign up for our newsletter to get update from us</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-letter-form">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                              name="mc-embedded-subscribe-form" method="post"
                              action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                        >
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required=""
                                       placeholder="Enter Your Mail Here......." name="EMAIL" value="">
                                <div class="mc-news d-none" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1"
                                           name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <button id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                            value=""> Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Area Start -->
<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-md-6 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Information</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="about.html">About us</a></li>
                                        <li class="li"><a class="single-link" href="#">Delivery information</a></li>
                                        <li class="li"><a class="single-link" href="privacy-policy.html">Privacy
                                                Policy</a></li>
                                        <li class="li"><a class="single-link" href="#">Sales</a></li>
                                        <li class="li"><a class="single-link" href="#">Terms & Conditions</a></li>
                                        <li class="li"><a class="single-link" href="#">Shipping Policy</a></li>
                                        <li class="li"><a class="single-link" href="#">EMI Payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Account</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="my-account.html"> My account</a>
                                        </li>
                                        <li class="li"><a class="single-link" href="cart.html">My orders</a></li>
                                        <li class="li"><a class="single-link" href="#">Returns</a></li>
                                        <li class="li"><a class="single-link"
                                                          href="shop-left-sidebar.html">Shipping</a></li>
                                        <li class="li"><a class="single-link" href="wishlist.html">Wishlist</a></li>
                                        <li class="li"><a class="single-link" href="#">How Does It Work</a></li>
                                        <li class="li"><a class="single-link" href="#">Merchant Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-2 col-sm-6 mb-sm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Store </h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="index.html">Affiliate</a></li>
                                        <li class="li"><a class="single-link"
                                                          href="shop-left-sidebar.html">Bestsellers</a></li>
                                        <li class="li"><a class="single-link" href="#">Discount</a></li>
                                        <li class="li"><a class="single-link" href="#">Latest products</a></li>
                                        <li class="li"><a class="single-link" href="#">Sale</a></li>
                                        <li class="li"><a class="single-link" href="#">All Collection</a></li>
                                        <li class="li"><a class="single-link" href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-4 col-md-6 col-sm-6 pl-120px line-shape">
                        <div class="single-wedge ">

                            <h4 class="footer-herading">Contact Us</h4>
                            <div class="footer-links">
                                <!-- News letter area -->
                                <p class="mail">If you have any question.please <br>
                                    contact us at <a href="mailto:demo@example.com">demo@example.com</a></p>
                                <p class="address"><i class="pe-7s-map-marker"></i> <span>Your address goes here.
                                            <br>
                                            123, Address.</span></p>
                                <p class="phone m-0"><i class="pe-7s-phone"></i><span><a href="tel:0123456789">+ 0 123
                                                456 789</a> <br> <a href="tel:0123456789">+ 0 123 456 789</a></span></p>

                                <!-- News letter area  End -->
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="line-shape-top">
                    <div class="row flex-md-row-reverse align-items-center">
                        <div class="col-md-6 text-center text-md-end">
                            <div class="payment-mth"><a href="#"><img class="img img-fluid"
                                                                      src="assets/images/icons/payment.png"
                                                                      alt="payment-image"></a></div>
                        </div>
                        <div class="col-md-6 text-center text-md-start">
                            <p class="copy-text"> © 2021 <strong>Mioca.</strong> Made With <i class="fa fa-heart"
                                                                                              aria-hidden="true"></i> By
                                <a class="company-name"
                                   href="https://hasthemes.com/">
                                    <strong> HasThemes</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->

<!-- Search Modal Start -->
<div class="modal popup-search-style" id="searchActive">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Search Your Product</h2>
                    <form class="navbar-form position-relative" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                        <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->


<!-- Modal -->
<div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs mt-20px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/4.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>Hand-Made Garlic Mortar</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">$20.90</li>
                                    <li class="old-price">
                                        <del>$30.90</del>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                            </div>
                            <div class="stock mt-30px">
                                    <span class="avallabillty">Availability: <span class="in-stock"><i
                                                class="fa fa-check"></i>In Stock</span></span>
                            </div>
                            <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni
                                nostrud exercitation ullamco laboris </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1"/>
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart"> Add To
                                        Cart
                                    </button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Handmade, </a>
                                    </li>
                                    <li>
                                        <a href="#">Furniture, </a>
                                    </li>
                                    <li>
                                        <a href="#">Decore</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-social-info pro-details-same-style d-flex">
                                <span>Share: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-img">
                                <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-3.5.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.2.min.js')); ?>"></script>

<!--Plugins JS-->
<script src="<?php echo e(asset('assets/js/plugins/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/countdown.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/scrollup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery.zoom.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/venobox.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/ajax-mail.js')); ?>"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="<?php echo e(asset('assets/js/vendor/vendor.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/plugins.min.js')); ?>"></script> -->

<!-- Main Js -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\dokan\resources\views/ecommerce/layouts/app.blade.php ENDPATH**/ ?>