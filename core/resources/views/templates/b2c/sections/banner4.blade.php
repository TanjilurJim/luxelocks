
@php
    $content = getContent('banner4.content', true);

    // dd($dataValues);
                           
@endphp
@if ($content)
@php
        $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<div class="top-notice bg-primary text-white  top-notice-bg appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
    <div class="container text-center d-flex align-items-center justify-content-center flex-column flex-xl-row ">
        
        <h5 class="d-inline-block mb-0 pl-3 pr-3 pt-1 pb-1">{{ $dataValues->title }}
        </h5>
        <a href="{{ $dataValues->link }}" class="btn btn-darkcategory ls-n-0 mt-xl-0 mt-1">SHOP NOW!</a>
    </div>
    <!-- End .container -->
</div>
@endif