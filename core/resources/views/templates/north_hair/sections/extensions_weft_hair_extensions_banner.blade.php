@php
    // Fetch content dynamically
    $content = getContent('extensions_weft_hair_extensions_banner.c', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp

@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <!-- Desktop Banner -->
        <img src="{{ asset('assets/images/frontend/extensions_weft_hair_extensions_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
             alt="{{ $data_values->title ?? 'Weft Extensions' }}"
             class="w-full md:block hidden bg-left">

        <div class="absolute inset-0 flex items-center justify-start max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col items-start justify-start">
                <h1 class="lg:text-[64px] md:text-[36px] text-[24px] leading-tight uppercase">
                    {{ $data_values->title ?? 'Default Title' }}</h1>
                <p class="lg:text-[28px] md:text-[20px] text-[16px]">
                    {{ $data_values->subtitle ?? 'Default Subtitle' }}</p>
            </div>
        </div>

        <!-- Mobile Banner -->
        <img src="{{ asset('assets/images/frontend/extensions_weft_hair_extensions_banner/' . ($data_values->banner_mobile ?? 'default.jpg')) }}"
             alt="{{ $data_values->title ?? 'Weft Extensions' }}"
             class="w-full block md:hidden">
    </section>
@endif
