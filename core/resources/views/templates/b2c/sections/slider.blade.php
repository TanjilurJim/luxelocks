@php
    $content = getMultipleContent('slider.element', true);
    // dd($content);
@endphp
@if ($content)
<div class="bg-gray pb-5">
                <div class="container pb-3">

                    <div class="home-slider slide-animate owl-carousel owl-theme nav-circle mb-2" data-owl-options="{
                                'loop': false
                            }">

                        @foreach($content as $slider)
                            @php
                                $dataValues = is_string($slider->data_values) ? json_decode($slider->data_values) : $slider->data_values;
                                // dd($dataValues);
                            @endphp
                            <div class="home-slide home-slide1 banner">
                                <img class="slide-bg" 
                                src="{{ $dataValues->slider 
                                        ? asset('assets/images/frontend/slider/' . $dataValues->slider) 
                                        : asset('assets/b2c/assets/images/demoes/demo36/slider/slide-1.jpg') }}" 
                                alt="slider image">

                                <div class="container d-flex align-items-sm-center justify-content-sm-between justify-content-center flex-column flex-sm-row">
                                    <div class="banner-content content-left text-sm-right mb-sm-0 mb-2">
                                        <h2 class="text-shadow text-white font1 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="100">TRENDY</h2>
                                        <h1 class="text-dark appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">
                                            {{ $dataValues->Slogan ?? 'Default Slogan' }}
                                        </h1>
                                        <h3 class="text-dark mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600"></h3>
                                        <h2 class="text-shadow text-white font1 mr-0 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">DEALS</h2>
                                    </div>
                                    <!-- End .banner-layer -->

                                    <div class="banner-content content-right appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1000">
                                        <h4 class="text-transform-none">{{ $dataValues->title ?? 'Not found Title' }}</h4>
                                        <h5 class="text-price text-transform-none mb-0">from <span>৳{{ $dataValues->old_price ?? '0' }}</span></h5>
                                        <h5 class="coupon-sale-text">
                                            <span>to</span>
                                            <b class="text-white align-middle"><sup>৳</sup><em class="align-text-top">{{ $dataValues->new_price ?? '0' }}</em><sup>99</sup></b>
                                        </h5>
                                        <a href="{{ $dataValues->link ?? '#' }}" class="btn btn-allstore btn-lg">Shop Now</a>
                                    </div>
                                    <!-- End .banner-layer -->
                                </div>
                            </div>
                        @endforeach
                        



                        {{-- @foreach($content as $slider)
                        <div class="home-slide home-slide1 banner">
                            <img class="slide-bg" src="{{ asset('assets/b2c/assets/images/demoes/demo36/slider/slide-1.jpg') }}" alt="slider image">
                            <div class="container d-flex align-items-sm-center justify-content-sm-between justify-content-center flex-column flex-sm-row">
                                <div class="banner-content content-left text-sm-right mb-sm-0 mb-2">
                                    <h2 class="text-shadow text-white font1 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="100">TRENDY</h2>
                                    <h1 class="text-dark appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">{{ $slider.$slogan }}</h1>
                                    <h3 class="text-dark mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">CHAIRS</h3>
                                    <h2 class="text-shadow text-white font1 mr-0 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">DEALS</h2>
                                </div>
                                <!-- End .banner-layer -->

                                <div class="banner-content content-right appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1000">
                                    <h4 class="text-transform-none">Allstore Game Chair</h4>
                                    <h5 class="text-price text-transform-none mb-0">from <span> ৳299.99</span></h5>
                                    <h5 class="coupon-sale-text">
                                        <span>to</span>
                                        <b class="text-white align-middle"><sup> ৳</sup><em
                                                class="align-text-top">199</em><sup>99</sup></b>
                                    </h5>
                                    <a href="#" class="btn btn-allstore btn-lg">Shop Now</a>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                        </div>
                        @endforeach --}}
                        <!-- End .home-slide -->

                        {{-- <div class="home-slide home-slide2 banner banner-md-vw">
                            <img class="slide-bg" src="{{ asset('assets/b2c/assets/images/demoes/demo36/slider/slide-2.jpg') }}" alt="slider image">
                            <div class="container d-flex align-items-sm-center justify-content-center justify-content-sm-between flex-column-reverse flex-sm-row">
                                <div class="banner-content content-left mt-2 mt-sm-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1000">
                                    <h4 class="text-transform-none">Best Gadtets Deals</h4>
                                    <h5 class="coupon-sale-text">
                                        <span>from</span>
                                        <b class="text-white align-middle"><sup> ৳</sup><em
                                                class="align-text-top">1</em><sup>99</sup></b>
                                    </h5>
                                    <a href="#" class="btn btn-allstore btn-lg">Shop Now</a>
                                </div>
                                <!-- End .banner-layer -->

                                <div class="banner-content content-right text-sm-right">
                                    <h2 class="text-shadow text-white font1 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="100">NEW</h2>
                                    <h1 class="text-dark appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">SELECTED</h1>
                                    <h3 class="text-dark mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">DEALS</h3>
                                    <h2 class="text-shadow text-white font1 mr-0 mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">RELEASES</h2>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                        </div> --}}
                        <!-- End .home-slide -->
                    </div>
                    <!-- End .home-slider -->
@endif