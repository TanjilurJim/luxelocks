@php
    $content = getContent('women_human_hair_toppers_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_human_hair_toppers_banner/' . $data_values->banner_desktop) }}" alt="toppers" class="w-full lg:h-[475px] h-[256px] md:block hidden object-cover object-center">
    <div class="absolute inset-0 flex flex-col items-start justify-center max-w-screen-xl mx-auto px-4">
        <h1 class="lg:text-[60px] text-[20px] mb-5 leading-tight uppercase">
            {{ $data_values->title }} <br> {{ $data_values->title_br }}</h1>
        <p class="md:text-center text-start lg:text-[24px] md:text-[20px] text-[16px] leading-tight">
            {{ $data_values->sub_title }}
        </p>
    </div>
    <img src="{{ asset('assets/images/frontend/women_human_hair_toppers_banner/' . $data_values->banner_mobile) }}" alt="toppers" class="w-full block md:hidden object-cover object-center">
</section>
@endif
