@php
    $content = getContent('banner2.content', true);
    // dd($content);
@endphp
@if ($content)
    @php

        $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;

    @endphp
<div class="bg-gray">
                <div class="container">
                    <div class="categories-container bg-white appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                        <h4 class="section-title text-transform-none">Electronics</h4>
                        <div class="row">
                            {{-- <div class="col-md-6 mb-2 mb-md-0">
                                <div class="banner banner4 bg-image" style="background-image: url({{ asset('assets/b2c/assets/images/demoes/demo36/banners/banner4.jpg') }});">
                                    <div class="banner-layer d-flex align-items-center flex-column flex-sm-row justify-content-end">
                                        <div class="content-left">
                                            <div class="coupon-sale-content">
                                                <h4 class="custom-coupon-sale-text text-white bg-dark d-block ext-transform-none mr-0 ls-0">
                                                    Exclusive COUPON
                                                </h4>
                                                <h5 class="custom-coupon-sale-text text-dark  ls-0 p-0"><i class="ls-0">UP
                                                        TO</i><b class="text-white bg-dark"> ৳100</b><sub>OFF</sub></h5>
                                            </div>
                                        </div>
                                        <div class="content-right">
                                            <h3 class="text-dark mb-0 text-sm-right text-left">DRONE & CAMERAS
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12 mb-2 mb-md-0">
                                <div class="banner banner5 bg-image" style="background-image: url('{{ asset('assets/images/frontend/banner2/' . $dataValues->fixed_banner) }}');">

                                    <div class="banner-layer d-flex align-items-center flex-column flex-sm-row justify-content-end">
                                        <div class="content-left">
                                            <h3 class="text-white text-center mb-0">{{$dataValues->title}}
                                            </h3>
                                        </div>

                                        <div class="content-right">
                                            <div class="coupon-sale-content pt-1">
                                                <h4 class="custom-coupon-sale-text text-dark bg-white d-block ext-transform-none mr-0 ls-0">
                                                    {{$dataValues->slogan}}
                                                </h4>
                                                <h5 class="custom-coupon-sale-text text-white mb-0 ls-0 p-0"><i class="ls-0">UP
                                                        TO</i><b class="text-white bg-secondary"> ৳{{$dataValues->offer_percentage}}</b><sub>OFF</sub>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endif
