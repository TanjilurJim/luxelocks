@php
    $content = getContent('extensions_tape_hair_extensions_banner.c', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/extensions_tape_hair_extensions_banner/' . $data_values->banner_desktop) }}" alt="tape" class="w-full md:block hidden object-cover object-center">
    <div class="absolute inset-0 flex items-center md:justify-end justify-center max-w-screen-xl mx-auto px-4">
        <div class="flex flex-col items-center justify-center">
            <h1 class="lg:text-[64px] text-[40px] text-white text-center leading-tight uppercase">
                {{ $data_values->title }}</h1>
            <p class="lg:text-[28px] md:text-[20px] text-white">{{ $data_values->subtitle }}</p>
        </div>
    </div>
    <img src="{{ asset('assets/images/frontend/extensions_tape_hair_extensions_banner/' . $data_values->banner_mobile) }}" alt="tape" class="w-full block md:hidden object-cover object-center">
</section>
@endif
