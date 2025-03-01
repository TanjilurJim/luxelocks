@php
    $content = getContent('exclusive_secs.content', true);

    // dd($dataValues);
                           
@endphp

@if ($content)
@php
        $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<div class="promo-section bg-white appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
            <div class="promo-banner banner container text-uppercase bg-transparent">
                <div class=" banner-content d-flex align-items-center justify-content-center flex-column
                flex-md-row text-center">
                    <h1 class="text-white text-animate text-shadow font1">
                        @php
                            $i=0;
                            for ($i=0; $i < 4 ; $i++) { 
                                echo $dataValues->title . "&nbsp;" ;
                            }
                        @endphp
                    </h1>
                    
                    <h6 class="font1 mb-md-0 mb-1 pt-2 pt-md-0 pb-1">{{ $dataValues->slogan }}</h6>
                    <h4 class="d-inline-block mb-0 pl-3 pr-3 pt-1 pb-1 mb-md-0 mb-1">{{ $dataValues->title }}</h4>
                    <a href="{{ $dataValues->link }}" target="_blank" class="btn btn-allstore">Get NOW!</a>
                </div>
            </div>
        </div>

    </div>
</div>    
@endif
