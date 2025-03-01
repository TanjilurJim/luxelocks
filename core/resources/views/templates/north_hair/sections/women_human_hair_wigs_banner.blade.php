@php
    $content = getContent('women_human_hair_wigs_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_human_hair_wigs_banner/' . $data_values->banner_desktop) }}" alt="wigs" class="w-full md:block hidden bg-left object-cover object-center">
    <div
        class="absolute inset-0 flex items-center justify-end max-w-screen-2xl mx-auto px-4 pl-[40%]">
        <h1 class="lg:text-[40px] text-[18px] lg:leading-[60px] leading-[22px] mb-5 uppercase">
            {{ $data_values->title }}</h1>
    </div>
    <img src="{{ asset('assets/images/frontend/women_human_hair_wigs_banner/' . $data_values->banner_mobile) }}" alt="wigs" class="w-full block md:hidden object-cover object-center">
</section>
@endif