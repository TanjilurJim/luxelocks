@extends('Template::layouts.app')
@section('app')
    <div class="page-wrapper">
        <div class="top-notice bg-dark text-white pt-3">
            <div class="container text-center d-flex align-items-center justify-content-center flex-wrap">
                <img src="{{ asset('assets/b2c/assets/img/logo.png') }}" width="116" height="23" alt="logo" />
                <h5 class="d-inline-block mb-0 pl-3 pr-3 pt-2 pb-2">The Lowest Prices Once A Month! Hurry To Snap Up
                </h5>
                <a href="demo36-shop.html" class="btn btn-darkcategory ls-0">SHOP NOW!</a>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <div class="info-box info-box-icon-left text-primary justify-content-start p-0">
                            <i class="fas fa-shipping-fast"></i>


                            <div class="info-box-content">
                                <h4 class="text-transform-none">FREE Express Shipping On Orders  ৳99+</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">

                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">My account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="login.html" class="login-link">Log In</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook "><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon social-instagram"><i class="fab fa-instagram"></i></a>
                        </div>

                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-dark mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="demo36.html" class="logo">
                            <img src="{{ asset('assets/b2c/assets/img/logo.png') }}" class="w-100" width="111" height="44" alt="Allstore Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mb-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <a href="login.html" class="d-lg-block d-none">
                            <div class="header-user">
                                <i class="icon-user-2"></i>
                                <div class="header-userinfo">
                                    <span>Welcome</span>
                                    <h4 class="mb-0">My Account</h4>
                                </div>
                            </div>
                        </a>

                        <a href="wishlist.html" class="header-icon position-relative" title="wishlist">
                            <i class="icon-wishlist-2"></i>
                            <span class="wishlist-count badge-circle">0</span>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-cart-thick"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo36-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> ×  ৳99.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo36-product.html" class="product-image">
                                                    <img src="assets/images/demoes/demo36/products/product-1.jpg" alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo36-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> ×  ৳35.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo36-product.html" class="product-image">
                                                    <img src="assets/images/demoes/demo36/products/product-2.jpg" alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo36-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> ×  ৳35.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo36-product.html" class="product-image">
                                                    <img src="assets/images/demoes/demo36/products/product-3.jpg" alt="product" width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->
                                    </div>
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right"> ৳134.00</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-flex" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu w-100">
                            <li class="menu-item">
                                <a class="d-inline-flex align-items-center sf-with-ul text-white">
                                    <i class="custom-icon-toggle-menu d-inline-table"></i><span>ALL
                                        DEPARTMENTS</span></a>
                                <div class="menu-depart-overlay"></div>
                                <!-- End .mobil-menu-overlay -->
                                <div class="menu-depart">
                                    <ul class="menu menu-vertical sf-arrows d-block no-superfish">
                                        <li>
                                            <a href="#"><i class="icon-category-fashion"></i>Fashion</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-one">
                                                <div class="row">
                                                    <div class="col-lg-3 mb-1 pb-2">
                                                        <a href="#" class="nolink pl-0">WOMAN</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Top & Blouses</a></li>
                                                            <li><a href="demo36-shop.html">Accessories</a></li>
                                                            <li><a href="demo36-shop.html">Dresses & Skirts</a></li>
                                                            <li><a href="demo36-shop.html">Shoes & Boots</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">JEWELLERY</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Sweaters</a></li>
                                                            <li><a href="demo36-shop.html">Heels & Sandals</a></li>
                                                            <li><a href="demo36-shop.html">Jeans & Shorts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a href="#" class="nolink pl-0">MAN</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Accessories</a></li>
                                                            <li><a href="demo36-shop.html">Watch Fashion</a></li>
                                                            <li><a href="demo36-shop.html">Tees, Knits & Polos</a></li>
                                                            <li><a href="demo36-shop.html">KOKA</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">KIDS FASHION</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Casual Shoes</a></li>
                                                            <li><a href="demo36-shop.html">Spring & Autumn</a></li>
                                                            <li><a href="demo36-shop.html">Winter Sneakers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-5 p-0 d-lg-block d-none">
                                                        <div class="menu-banner menu-banner-2">
                                                            <figure>
                                                                <img src="assets/images/demoes/demo40/menu-banner-1.jpg" alt="Menu banner" class="product-promo w-100">
                                                            </figure>
                                                            <i>OFF</i>
                                                            <div class="banner-content">
                                                                <h4>
                                                                    <span class="text-dark">UP TO</span><br />
                                                                    <b class="text-dark">50%</b>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 d-lg-block d-none">
                                                        <div class="partners-container row">
                                                            <div class="col-xl-5col">
                                                                <div class="partner">
                                                                    <img src="assets/images/brands/small/brand1.png" alt="logo image" width="140" height="60"></div>
                                                            </div>
                                                            <div class="col-xl-5col">
                                                                <div class="partner">
                                                                    <img src="assets/images/brands/small/brand2.png" alt="logo image" width="140" height="60"></div>
                                                            </div>
                                                            <div class="col-xl-5col">
                                                                <div class="partner">
                                                                    <img src="assets/images/brands/small/brand3.png" alt="logo image" width="140" height="60"></div>
                                                            </div>
                                                            <div class="col-xl-5col">
                                                                <div class="partner">
                                                                    <img src="assets/images/brands/small/brand4.png" alt="logo image" width="140" height="60"></div>
                                                            </div>
                                                            <div class="col-xl-5col">
                                                                <div class="partner">
                                                                    <img src="assets/images/brands/small/brand5.png" alt="logo image" width="140" height="60"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-category-electronics"></i>Electronics</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-two">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <a href="#" class="nolink pl-0">ACCESSORIES</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Cables & Adaperts</a></li>
                                                            <li><a href="demo36-shop.html">Electronic Cigarettes</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Batteries</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Chargers</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Home Electronic</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Bags & Cases</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-2">
                                                        <a href="#" class="nolink pl-0">AUDIO & VIDEO</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Televisions</a></li>
                                                            <li><a href="demo36-shop.html">Projectors</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">TV peceivers</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Audio Amplifier</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">TV Sticks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-0">
                                                        <a href="#" class="nolink pl-0">CAMERA & PHOTO</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Digital Cameras</a></li>
                                                            <li><a href="demo36-shop.html">Camcorders</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Camera Drones</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Action Cameras</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Photo Supplies</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Camera & Photo</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-0">
                                                        <a href="#" class="nolink pl-0">LAPTOPS</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">Caming Laptops</a></li>
                                                            <li><a href="demo36-shop.html">Ultraslim Laptops</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Laptop Accessories</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Laptop Bags & Cases</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Tablet Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->
                                                    <div class="banner-container w-100 pl-3 pr-3 d-lg-block d-none">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="banner banner7 banner-md-vw text-transform-none">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/menu-banner-2.jpg" alt="banner">
                                                                    </figure>

                                                                    <div class="banner-layer banner-layer-middle d-flex align-items-center justify-content-end pt-0">
                                                                        <div class="content-left">
                                                                            <h4 class="banner-layer-circle-item mb-0 ls-0">
                                                                                40<sup>%<small
                                                                                        class="ls-0">OFF</small></sup>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="content-right text-right">
                                                                            <h5 class=" ls-0"><del class="d-block m-b-2 text-secondary"> ৳450</del> ৳270
                                                                            </h5>
                                                                            <h4 class="m-b-1 ls-n-25">Watches</h4>
                                                                            <h3 class="mb-0">HURRY UP!</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End .banner -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="banner banner8 banner-md-vw">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/menu-banner-3.jpg" alt="banner">
                                                                    </figure>

                                                                    <div class="banner-layer banner-layer-middle d-flex align-items-end flex-column">
                                                                        <h3 class="text-dark text-right">
                                                                            Electronic<br>Deals</h3>

                                                                        <div class="coupon-sale-content">
                                                                            <h4 class="menu-coupon-sale-text bg-dark text-white d-block font1 text-transform-none">
                                                                                Exclusive COUPON
                                                                            </h4>
                                                                            <h5 class="custom-coupon-sale-text font1 text-dark ls-n-10 p-0">
                                                                                <b class="text-dark"> ৳100</b> OFF</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End .banner -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-category-gifts"></i>Gifts</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-three">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <a href="#" class="nolink pl-0 d-flex flex-column align-items-start"><i
                                                                class="icon-boy-broad-smile"></i>FOR HIM</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Gifts for Boyfriend</a></li>
                                                            <li><a href="demo36-shop.html">Gifts for Husband</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Gifts for Dad</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-2">
                                                        <a href="#" class="nolink pl-0 d-flex flex-column align-items-start"><i
                                                                class="icon-smiling-girl"></i>FOR HER</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Gifts for Girlfriend</a></li>
                                                            <li><a href="demo36-shop.html">Gifts for Wife</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Gifts for Mom</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-0">
                                                        <a href="#" class="nolink pl-0 d-flex flex-column align-items-start"><i
                                                                class="icon-smiling-baby"></i>FOR KIDS</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Gifts for Boys</a></li>
                                                            <li><a href="demo36-shop.html">Gifts for Grils</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Gifts for Tween Boys</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->

                                                    <div class="col-lg-3 pl-xl-0">
                                                        <a href="#" class="nolink pl-0 d-flex flex-column align-items-start"><i
                                                                class="icon-gift-2"></i>BIRTHDAY</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Birthday for Him</a></li>
                                                            <li><a href="demo36-shop.html">Birthday for Her</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Boyfriend Gifts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-4 -->
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-category-garden"></i>Home & Garden</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-four">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-1 pb-2">
                                                        <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                            1</a>
                                                        <a href="#" class="nolink pl-0">FURNITURE</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">BEAUTY & PERSONAL CARE</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">SOF & COUCHES</a></li>
                                                            <li><a href="demo36-shop.html">ARMCHARIRS</a></li>
                                                            <li><a href="demo36-shop.html">BED FRAMES</a></li>
                                                            <li><a href="demo36-shop.html">BEDSIDE TABLES</a></li>
                                                            <li><a href="demo36-shop.html">BRESSING TABLES</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">HOME ACCESSORIES</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">DECORATIVE ACCESSORIES</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">CANDLES & HOLDERS</a></li>
                                                            <li><a href="demo36-shop.html">HOME FRAGRANCE</a></li>
                                                            <li><a href="demo36-shop.html">MIRRORS</a></li>
                                                            <li><a href="demo36-shop.html">CLOCKS</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                            2</a>
                                                        <a href="#" class="nolink pl-0">LIGHTING</a>
                                                        <ul class="submenu">
                                                            <li><a href="demo36-shop.html">LIGHT BULBS</a></li>
                                                            <li><a href="demo36-shop.html">LAMPS</a></li>
                                                            <li><a href="demo36-shop.html">CEILING LIGHTS</a></li>
                                                            <li><a href="demo36-shop.html">WALL LIGHTS</a></li>
                                                            <li><a href="demo36-shop.html">BATHROOM LIGHTING</a></li>
                                                            <li><a href="demo36-shop.html">OUTDOOR LIGHTING</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">GARDEN & OUTDOORS</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">GARDEN FURNITURE</a></li>
                                                            <li><a href="demo36-shop.html">LAWN MOWERS</a></li>
                                                            <li><a href="demo36-shop.html">PRESSURE WASHERS</a></li>
                                                            <li><a href="demo36-shop.html">ALL ARDEN TOOLS &
                                                                    EQUIPMENT</a></li>
                                                            <li><a href="demo36-shop.html">BARBECURE & OUTDOOR
                                                                    DINING</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 d-lg-block d-none">
                                                        <div class="product-widgets-container">
                                                            <div class="product-default left-details product-widget">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="assets/images/demoes/demo36/products/small/product-1.jpg" width="84" height="84" alt="product">
                                                                    </a>
                                                                </figure>

                                                                <div class="product-details">
                                                                    <h3 class="product-title"> <a href="demo36-product.html">PT Speaker</a>
                                                                    </h3>

                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:100%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->

                                                                    <div class="price-box">
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>

                                                            <div class="product-default left-details product-widget">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="assets/images/demoes/demo36/products/small/product-2.jpg" width="84" height="84" alt="product">
                                                                    </a>
                                                                </figure>

                                                                <div class="product-details">
                                                                    <h3 class="product-title">
                                                                        <a href="demo36-product.html">Beats Solo HD
                                                                            Drenched</a>
                                                                    </h3>

                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:100%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top">5.00</span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->

                                                                    <div class="price-box">
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>

                                                            <div class="product-default left-details product-widget">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="assets/images/demoes/demo36/products/small/product-3.jpg" width="84" height="84" alt="product">
                                                                    </a>
                                                                </figure>

                                                                <div class="product-details">
                                                                    <h3 class="product-title">
                                                                        <a href="demo36-product.html">Palm Print
                                                                            Jacket</a>
                                                                    </h3>

                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:100%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->

                                                                    <div class="price-box">
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>

                                                            <div class="product-default left-details product-widget">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="assets/images/demoes/demo36/products/small/product-4.jpg" width="84" height="84" alt="product">
                                                                    </a>
                                                                </figure>

                                                                <div class="product-details">
                                                                    <h3 class="product-title"> <a href="demo36-product.html">Camera</a> </h3>

                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:100%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top">5.00</span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->

                                                                    <div class="price-box">
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>

                                                            <div class="product-default left-details product-widget">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="assets/images/demoes/demo36/products/small/product-5.jpg" width="84" height="84" alt="product">
                                                                    </a>
                                                                </figure>

                                                                <div class="product-details">
                                                                    <h3 class="product-title"> <a href="demo36-product.html">Red Football</a>
                                                                    </h3>

                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:100%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->

                                                                    <div class="price-box">
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-category-music"></i>Gaming</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-five text-transform-none" style="background-image: url(assets/images/demoes/demo40/menu-banner-4.jpg);">
                                                <div class="row">
                                                    <div class="col-lg-4 pt-0">
                                                        <a href="#" class="nolink pl-0">INSTRUMENTS</a>
                                                        <ul class="submenu bg-transparent">
                                                            <li><a href="demo36-shop.html">Beverages</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Guitar</a></li>
                                                            <li><a href="demo36-shop.html">Drums Sets</a></li>
                                                            <li><a href="demo36-shop.html">Percussions</a></li>
                                                            <li><a href="demo36-shop.html">Pedals & Effects</a></li>
                                                            <li><a href="demo36-shop.html">Sound Cards</a></li>
                                                            <li><a href="demo36-shop.html">Studio Equipments</a></li>
                                                            <li><a href="demo36-shop.html">Piano & Keyboards</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">EXTRA</a>
                                                        <ul class="submenu bg-transparent pb-0">
                                                            <li><a href="demo36-shop.html">Alcohol</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Strings</a></li>
                                                            <li><a href="demo36-shop.html">Recorders</a></li>
                                                            <li><a href="demo36-shop.html">Amplifiers</a></li>
                                                            <li><a href="demo36-shop.html">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-8 pt-0 d-lg-block d-none">
                                                        <div class="banner banner9 mb-2 h-100 d-flex align-items-center">
                                                            <div class="banner-layer text-right pt-0">
                                                                <h6 class="text-transform-none">
                                                                    CHECK NEW ARRIVALS
                                                                </h6>
                                                                <h3 class=" text-white">PROFESSIONAL</h3>
                                                                <h2 class="text-transform-none text-white">
                                                                    HEADPHONES</h2>
                                                                <a href="demo36-shop.html" class="btn btn-dark">VIEW
                                                                    ALL NOW</a>
                                                            </div>
                                                            <!-- End .banner-layer -->
                                                        </div>
                                                        <!-- End .home-slide -->
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-cat-sport"></i>Sports</a>

                                            <div class="megamenu megamenu-fixed-width megamenu-four megamenu-product">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-0 pb-2">
                                                        <a href="#" class="nolink pl-0">SPORTS</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Sports & Fitness</a>
                                                            </li>
                                                            <li><a href="demo36-shop.html">Boating & Sailing</a></li>
                                                            <li><a href="demo36-shop.html">Clothing</a></li>
                                                            <li><a href="demo36-shop.html">Exercise & Fitness</a></li>
                                                            <li><a href="demo36-shop.html">Golf</a></li>
                                                            <li><a href="demo36-shop.html">Hunting & Fishing</a></li>
                                                            <li><a href="demo36-shop.html">Leisure Sports</a></li>
                                                            <li><a href="demo36-shop.html">Running</a></li>
                                                            <li><a href="demo36-shop.html">Swiming</a></li>
                                                            <li><a href="demo36-shop.html">Team Sports</a></li>
                                                            <li><a href="demo36-shop.html">Tennis</a></li>
                                                            <li><a href="demo36-shop.html">Other Sports</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="#" class="nolink pl-0 pt-2">SHOP BY PRICE</a>
                                                        <ul class="submenu mb-1">
                                                            <li><a href="demo36-shop.html">Under  ৳25</a></li>
                                                            <li><a href="demo36-shop.html"> ৳25 to  ৳50</a></li>
                                                            <li><a href="demo36-shop.html"> ৳50 to  ৳100</a></li>
                                                            <li><a href="demo36-shop.html"> ৳100 to  ৳200</a></li>
                                                            <li><a href="demo36-shop.html"> ৳250  ৳ Above</a></li>
                                                        </ul>

                                                        <a href="#" class="nolink pl-0">SHOP BY NRAND</a>
                                                        <ul class="submenu pb-0">
                                                            <li><a href="demo36-shop.html">Brooks</a></li>
                                                            <li><a href="demo36-shop.html">Adidas</a></li>
                                                            <li><a href="demo36-shop.html">Nike</a></li>
                                                            <li><a href="demo36-shop.html">Asics</a></li>
                                                            <li><a href="demo36-shop.html">Puma</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-5 d-lg-block d-none menu-product">
                                                        <div class="owl-carousel owl-theme show-nav-hover nav-outer dots-small" data-owl-options="{
                                                            'items': 1,
                                                            'loop': false
                                                        }">
                                                            <div class="product-default">
                                                                <figure>
                                                                    <h5>FLASH DEALS</h5>
                                                                    <a href="demo36-product.html">
                                                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-1.jpg') }}" width="450" height="450" alt="product">
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h3 class="product-title">
                                                                        <a href="demo36-product.html">Drone Pro</a>
                                                                    </h3>
                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:80%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->
                                                                    <div class="price-box">
                                                                        <del class="old-price"> ৳59.00</del>
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                    <div class="product-countdown-container">
                                                                        <span class="product-countdown-title">offer ends
                                                                            in:</span>
                                                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                                                        </div>
                                                                        <!-- End .product-countdown -->
                                                                    </div>
                                                                    <!-- End .product-countdown-container -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>

                                                            <div class="product-default">
                                                                <figure>
                                                                    <a href="demo36-product.html">
                                                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-2.jpg') }}" width="450" height="450" alt="product">
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h3 class="product-title">
                                                                        <a href="demo36-product.html">Drone Pro</a>
                                                                    </h3>
                                                                    <div class="ratings-container">
                                                                        <div class="product-ratings">
                                                                            <span class="ratings" style="width:80%"></span>
                                                                            <!-- End .ratings -->
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <!-- End .product-ratings -->
                                                                    </div>
                                                                    <!-- End .product-container -->
                                                                    <div class="price-box">
                                                                        <del class="old-price"> ৳59.00</del>
                                                                        <span class="product-price"> ৳49.00</span>
                                                                    </div>
                                                                    <!-- End .price-box -->
                                                                </div>
                                                                <!-- End .product-details -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('product.all') }}">Shop</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 1</a>
                                            <ul class="submenu">
                                                <li><a href="demo36-shop.html">Fullwidth Banner</a></li>
                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                        Banner</a>
                                                </li>
                                                <li><a href="category-banner-boxed-image.html">Boxed Image
                                                        Banner</a>
                                                </li>
                                                <li><a href="demo36-shop.html">Left Sidebar</a></li>
                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                                <li><a href="category-horizontal-filter1.html">Horizontal
                                                        Filter1</a>
                                                </li>
                                                <li><a href="category-horizontal-filter2.html">Horizontal
                                                        Filter2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 2</a>
                                            <ul class="submenu">
                                                <li><a href="category-list.html">List Types</a></li>
                                                <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
                                                </li>
                                                <li><a href="demo36-shop.html">3 Columns Products</a></li>
                                                <li><a href="category-4col.html">4 Columns Products</a></li>
                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner">
                                                <figure>
                                                    <img src="{{ asset('assets/b2c/assets/images/menu-banner.jpg') }}" width="192" height="313" alt="Menu banner">
                                                </figure>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                        <i>OFF</i>
                                                    </h4>
                                                    <a href="demo36-shop.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="demo36-product.html">Products</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT PAGES</a>
                                            <ul class="submenu">
                                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                <li><a href="product.html">SALE PRODUCT</a></li>
                                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                                <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                            <ul class="submenu">
                                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                                <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a>
                                                </li>
                                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                                <li><a href="#">BUILD YOUR OWN</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner menu-banner-2">
                                                <figure>
                                                    <img src="{{ asset('assets/b2c/assets/images/menu-banner-1.jpg') }}" alt="Menu banner" class="product-promo">
                                                </figure>
                                                <i>OFF</i>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                    </h4>
                                                </div>
                                                <a href="demo36-shop.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="#">Account</a>
                                <ul>
                                    <li><a href="{{ route('user.login') }}">Login</a></li>
                                    <li><a href="{{ route('user.register') }}">Registration</a></li>
                                    <li><a href="{{ route('user.password.request') }}">Forget-password</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="#">Account</a>
                                <ul>
                                    <li><a href="{{ route('user.login') }}">Login</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li> --}}

                            <li class="float-right phone"><a href="#" class="d-flex align-items-center"><i
                                        class="icon-phone-1"></i>1-800-234-5678</a>
                            </li>
                            <li class="float-right"><a href=" " target="_blank">NEW
                                    ARRIVALS</a></li>
                            <li class="float-right"><a href="#">FLASH DEALS</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        @yield('content')
        <footer class="footer font2">
            <div class="container">


                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">Customer Service</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Help & FAQs</a></li>
                                        <li><a href="#">Order Tracking</a></li>
                                        <li><a href="#">Shipping & Delivery</a></li>
                                        <li><a href="#">Orders History</a></li>
                                        <li><a href="#">Advanced Search</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">About Us</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Our Stores</a></li>
                                        <li><a href="#">Corporate Sales</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">More Information</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Refer a Friend</a></li>
                                        <li><a href="#">Student Beans Offers</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">Social Media</h3>
                                <div class="widget-content">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 mb-3 mb-lg-0">
                            <ul class="footer-category-list mb-0">
                                <li>
                                    <h4 class="d-inline-block">Fashion:</h4> <a href="demo36-shop.html">Tops
                                        &amp; Blouses</a> | <a href="demo36-shop.html">Accessories</a> | <a href="demo36-shop.html">Dresses
                                        &amp; Skirts</a> | <a href="demo36-shop.html">Shoes
                                        &amp; Boots</a> | <a class="view-all" href="demo36-shop.html">View
                                        All<i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                                <li>
                                    <h4 class="d-inline-block">Electronics:</h4> <a href="demo36-shop.html">Cables
                                        &amp; Adapters</a> | <a href="demo36-shop.html">Electronic
                                        Cigarettes</a> | <a href="demo36-shop.html">Batteries</a> | <a href="demo36-shop.html">Chargers</a> | <a href="demo36-shop.html">Home
                                        Electronic</a> | <a href="demo36-shop.html">Bags
                                        &amp; Cases</a> | <a class="view-all" href="demo36-shop.html">View
                                        All<i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                                <li>
                                    <h4 class="d-inline-block">Gifts:</h4> <a href="demo36-shop.html">Gifts
                                        for Boyfriend</a> | <a href="demo36-shop.html">Gifts
                                        for Husband</a> | <a href="demo36-shop.html">Gifts
                                        for Dad</a> | <a href="#">Gifts for Grandpa</a> | <a class="view-all" href="demo36-shop.html">View
                                        All<i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                                <li>
                                    <h4 class="d-inline-block">Home &amp; Garden:</h4> <a href="#">Sofas &amp;
                                        Couches</a> | <a href="#">Armchairs</a> | <a href="#">Bed Frames</a> | <a href="#">Bedside Tables</a> | <a href="#">Dressing Tables</a> | <a href="#">Chest of
                                        Drawers</a> | <a class="view-all" href="demo36-shop.html">View
                                        All<i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                                <li>
                                    <h4 class="d-inline-block">Music:</h4> <a href="#">Guitar</a> | <a href="#">Drums
                                        Sets</a> | <a href="#">Percussions</a> | <a href="#">Pedals &amp; Effects</a> |
                                    <a href="#">Sound Cards</a> | <a href="#">Studio Equipments</a> | <a href="#">Piano
                                        &amp; Keyboards</a> | <a href="#" class="view-all">View All<i
                                            class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                                <li>
                                    <h4 class="d-inline-block">Sports:</h4> <a href="#">Sports &amp; Fitness</a> | <a href="#">Boating &amp; Sailing</a> | <a href="#">Clothing</a> | <a href="#">Exercise
                                        &amp; Fitness</a> | <a href="#">Golf</a> | <a href="#">Hunting
                                        &amp; Fishing</a> | <a href="#">Leisure Sports</a> | <a href="#">Running</a> |
                                    <a class="view-all" href="demo36-shop.html">View
                                        All<i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-12 offset-lg-1 col-lg-3">
                            <div class="widget widget-payment">
                                <h3 class="widget-title ls-0">PAYMENT METHODS</h3>

                                <div class="widget-content">
                                    <div class="mr-0">
                                        <!-- Bkash Payment Icon -->
                                        <img src="{{ asset('assets/b2b/assets/img/bkash.png') }}" alt="Bkash Payment Method" srcset="">

                                        <!-- Nogod Payment Icon -->

                                        <img src="{{ asset('assets/b2b/assets/img/nogod.png') }}" alt="Nogod Payment Method" srcset="">
                                    </div>
                                </div>
                            </div>

                                                    </div>
                    </div>
                </div>
                <div class="footer-bottom d-sm-flex align-items-center justify-content-center">
                    <span class="footer-copyright">Allstore eCommerce. © 2025. All Rights
                        Reserved</span>
                </div>
                <!-- End .footer-bottom -->
            </div>
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo36.html">Home</a></li>
                    <li>
                        <a href="demo36-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.Allstoretheme.com/html/Allstore_ecommerce/category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="demo36-shop.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">
                            Buy Allstore!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo36.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo36-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>
@endsection
