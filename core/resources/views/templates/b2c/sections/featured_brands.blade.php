@php
    $content = getMultipleContent('featured_brands.element', true);
    // dd($content);
@endphp
@if ($content)
<div class="brands-section mt-2 mb-3 appear-animate" data-animation-delay="200" data-animation-name="fadeIn" data-animation-duration="1000">
    <div class="headding">
        <h4 class="section-title text-transform-none">Featured Brands</h4>
    </div>
    <div class="brands-slider owl-carousel bg-white owl-theme nav-circle images-center" data-owl-options="{
            'margin': 1,
            'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
            'nav': true
        }">
        @foreach($content as $featured_brands)
            @php
                $dataValues = is_string($featured_brands->data_values) ? json_decode($featured_brands->data_values) : $featured_brands->data_values;
                // dd($dataValues);
            @endphp
            <figure><img src="{{ $dataValues->featured_brands 
                                        ? asset('assets/images/frontend/featured_brands/' . $dataValues->featured_brands) 
                                        : asset('assets/b2c/assets/images/brands/small/brand2.png') }}" width="140" height="60" alt="brand">
            </figure>
            @endforeach

        {{-- <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand2.png') }}" width="140" height="60" alt="brand">
        </figure>
        <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand3.png') }}" width="140" height="60" alt="brand">
        </figure>
        <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand4.png') }}" width="140" height="60" alt="brand">
        </figure>
        <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand5.png') }}" width="140" height="60" alt="brand">
        </figure>
        <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand6.png') }}" width="140" height="60" alt="brand">
        </figure>
        <figure><img src="{{ asset('assets/b2c/assets/images/brands/small/brand4.png') }}" width="140" height="60" alt="brand">
        </figure> --}}
    </div>
    <!-- End .brands-slider -->
</div>

@endif