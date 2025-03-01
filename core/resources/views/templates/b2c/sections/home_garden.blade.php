@php
    $content = getContent('home_garden.content', true);

    // dd($dataValues);
                           
@endphp

<div class="bg-white appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
    <div class="row">
        <div class="col-xl-9 col-xl-9cols pr-xl-0">
            <div class="categories-container categories-container-three bg-white pb-0">
                <div class="heading d-flex flex-lg-row flex-column align-items-lg-center">
                    <h4 class="section-title text-transform-none mb-0">Home & Garden</h4>
                    <ul class="shop-list d-flex flex-wrap align-items-center p-0 mt-0">
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Garden & Outdoors</a></li>
                        <li><a href="#">Home Accessories</a></li>
                        <li><a href="#">Lighting</a></li>
                    </ul>
                    <a class="view-all" href="#">View
                        All<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                @if ($content)
                @php
                        $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
                @endphp
                <div class="banner banner6" data-md-order="8">
                    <figure>
                        
                        <img src="{{ $dataValues->home_garden_image 
                                        ? asset('assets/images/frontend/home_garden/' . $dataValues->home_garden_image) 
                                        : asset('assets/b2c/assets/images/demoes/demo36/banners/banner7.jpg') }}" alt="banner">
                    </figure>
                    <div class="banner-layer text-center content-left">
                        <h4 class="heading-border">{{ $dataValues->top_title }}</h4>
                        <h3 class="ls-0">{{ $dataValues->title }}</h3>
                        <hr class="mb-1 mt-0">
                        <h5>{{ $dataValues->bottom_title }}</h5>
                    </div>

                    <div class="banner-layer text-center content-right">
                        <h5 class="coupon-sale-text">
                            <span>STARTING AT</span>
                            <b class="text-dark align-middle"><sup> ৳</sup><em
                                    class="align-text-top">{{ $dataValues->starting_price }}</em><sup>99</sup></b>
                        </h5>
                        <h6>* {{ $dataValues->price_note }}</h6>
                    </div>

                </div>
                @endif
                <!-- End .banner -->
            </div>

            <div class="product-slider-tab appear-animate bg-white carousel-with-bg" data-animation-name="fadeIn" data-animation-delay="100">
                <div class="heading shop-list d-flex align-items-center flex-wrap justify-content-center justify-content-md-start">
                    <ul class=" nav ml-0 justify-content-center mb-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="true">Best Sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New
                                Arrivals</a>
                        </li>
                        <li class="nav-item mr-0">
                            <a class="nav-link" id="best-tab" data-toggle="tab" href="#best" role="tab" aria-controls="best" aria-selected="false">Best
                                Ratings</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                        <div class="products-slider owl-carousel nav-circle owl-theme pb-0" data-owl-options="{
                            'margin': 1,
                            'dots': false,
                            'nav': true,
                            'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-18.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">Brown Arm Chair</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-19.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">Coffee Cup</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-20.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">White Sofa</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-21.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">Wooden Chair</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <div class="products-slider owl-carousel nav-circle owl-theme pb-0" data-owl-options="{
                            'margin': 1,
                            'dots': false,
                            'nav': true,
                            'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-19.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">Coffee Cup</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-20.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">White Sofa</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-21.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">Wooden Chair</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                    <div class="tab-pane fade" id="best" role="tabpanel" aria-labelledby="best-tab">
                        <div class="products-slider owl-carousel nav-circle owl-theme" data-owl-options="{
                            'margin': 1,
                            'dots': false,
                            'nav': true,
                            'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/product-20.jpg') }}" width="239" height="239" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="#" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="#">White Sofa</a>
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
                                        <span class="old-price"> ৳29.00</span>
                                        <span class="product-price"> ৳19.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-xl-3cols">
            <div class="products-widget-container bg-white">
                <h2 class="section-title d-flex align-items-center text-transform-none"><i class="icon-percent-shape"></i>Special Offers
                </h2>

                <div class="product-countdown-container custom-product-countdown bg-white">
                    <span class="product-countdown-title ls-10">offer ends in:</span>
                    <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                    </div>
                    <!-- End .product-countdown -->
                </div>
                <!-- End .product-countdown-container -->

                <div class="row">
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-1.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">PT
                                        Speaker</a> </h3>

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
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-2.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">Beats Solo
                                        HD Drenched</a> </h3>

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
                    </div>
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-3.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">Palm Print
                                        Jacket</a> </h3>

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
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-4.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">Camera</a>
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
                    </div>
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-5.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">Red
                                        Football</a> </h3>

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
                    <div class="col-xl-12 col-md-4 col-sm-6">
                        <div class=" product-default left-details product-widget">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('assets/b2c/assets/images/demoes/demo36/products/small/product-6.jpg') }}" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="#">Soft
                                        Hat</a> </h3>

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
                    </div>
                </div>

                <a class="view-all" href="#">View
                    All<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
</div>
