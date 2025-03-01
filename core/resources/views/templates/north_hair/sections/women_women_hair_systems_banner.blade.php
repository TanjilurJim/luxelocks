@php
    $content = getContent('women_women_hair_systems_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_women_hair_systems_banner/' . $data_values->banner_desktop) }}" alt="women hair"
        class="w-full lg:h-[475px] h-[256px] md:block hidden bg-left object-cover object-center">
    <div class="absolute inset-0 flex flex-col items-end justify-center max-w-screen-xl mx-auto px-4">
        <div class="lg:pl-[50%] pl-[35%]">
            <h1 class="lg:text-[60px] sm:text-[30px] text-[24px] lg:leading-[60px] leading-[30px] mb-5 uppercase">
                {{ $data_values->title }}</h1>
            <p class="lg:text-[24px] text-[16px] leading-tight">{{ $data_values->sub_title }}</p>
        </div>
    </div>
    <img src="{{ asset('assets/images/frontend/women_women_hair_systems_banner/' . $data_values->banner_mobile) }}" alt="women hair" class="w-full block md:hidden object-cover object-center">
</section>
@endif
