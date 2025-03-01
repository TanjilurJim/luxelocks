@php
    $content = getMultipleContent('services_highlights.element', true);
    // dd($content);
                           

@endphp
@if ($content)
<div class="container">
    <div class="info-boxes-slider owl-carousel owl-theme appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200" data-owl-options="{
            'dots': false,
            'loop': false,
            'responsive': {
                '576': {
                    'items': 2
                },
                '992': {
                    'items': 3
                },
                '1400': {
                    'items': 4
                }
            }
        }">
        @foreach($content as $info)
            @php
                $dataValues = is_string($info->data_values) ? json_decode($info->data_values) : $info->data_values;
                // dd($dataValues);
            @endphp
        <div class="info-box info-box-icon-left">
            {{-- <i class="icon-shipping text-primary"></i> --}}
            {!! $dataValues->icon !!}
            <div class="info-box-content">
                
                <h4>{{$dataValues->title}}</h4>
                <p class="text-body">{{$dataValues->description}}</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->
        @endforeach

        {{-- <div class="info-box info-box-icon-left">
            <i class="icon-money text-primary"></i>

            <div class="info-box-content">
                <h4>MONEY BACK GUARANTEE</h4>
                <p class="text-body">100% money back guarantee</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->

        <div class="info-box info-box-icon-left">
            <i class="icon-support text-primary"></i>

            <div class="info-box-content">
                <h4>ONLINE SUPPORT 24/7</h4>
                <p class="text-body">Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->

        <div class="info-box info-box-icon-left">
            <i class="icon-password-lock text-primary"></i>

            <div class="info-box-content">
                <h4>SECURE PAYMENT</h4>
                <p class="text-body">Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- End .info-box-content -->
        </div> --}}
        <!-- End .info-box -->
    </div>
    <!-- End .info-boxes-slider -->
@endif