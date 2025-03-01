@php
    $content = getContent('banner1.content', true);
    // dd($content);
@endphp

@if ($content)
    @php

        $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    @endphp
    <div class="banner-section appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
        <div class="row">
            {{-- <div class="col-md-4 ">

                <div class="banner banner1 d-flex align-items-center justify-content-end"
                    style="background-image: url({{ asset('assets/b2c/assets/images/demoes/demo36/banners/banner1.jpg') }});">
                    <div class="container d-flex align-items-center justify-content-end">

                    </div>
                </div>
            </div> --}}


            <div class="col-md-12 mb-2 mb-md-0">
                <div class="banner banner2 d-flex align-items-center justify-content-end"
                    style="background-image: url({{ asset('assets/images/frontend/banner1/' . $dataValues->fixed_banner) }});">
                    <div class="container d-flex align-items-center justify-content-end">
                        <div class="banner-layer text-right pt-0">
                            <div class="banner-layer text-right">

                                <h6 class="font1 ls-10">{{$dataValues->slogan}}</h6>
                                <h4 class="text-white mb-0">{{$dataValues->title}}</h4>
                            </div>
                            {{-- <h4 class="text-dark mb-0 pl-3 pr-3 pt-1 pb-1">TOP ELECTRONIC<br/>FOR GIFTS
                            </h4> --}}
                            <h5 class="coupon-sale-text text-white font1">
                                <b class="text-white font1 ml-auto"><i>UP TO</i>{{$dataValues->offer_percentage}}%</b><span
                                    class="mr-0 ls-0">OFF</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
