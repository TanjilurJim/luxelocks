@php
    $content = getContent('women_hair_integration_systems_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_hair_integration_systems_banner/' . $data_values->banner_desktop) }}" alt="integration"
        class="w-full lg:h-[475px] h-[256px] md:block hidden object-cover object-center">
    <div class="absolute inset-0 flex flex-col items-end justify-center max-w-screen-xl mx-auto px-4">
        <ul class="list-disc ml-5">
            <li class="lg:text-[32px] text-[16px] text-[#444444] lg:py-5 py-1">{{ $data_values->list_1 }}</li>
            <li class="lg:text-[32px] text-[16px] text-[#444444] lg:py-5 py-1">{{ $data_values->list_2 }}
            </li>
            <li class="lg:text-[32px] text-[16px] text-[#444444] lg:py-5 py-1">{{ $data_values->list_3 }}</li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/frontend/women_hair_integration_systems_banner/' . $data_values->banner_mobile) }}" alt="integration" class="w-full block md:hidden object-cover object-center">
</section>
@endif