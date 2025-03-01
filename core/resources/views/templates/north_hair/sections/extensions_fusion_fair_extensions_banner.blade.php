@php
    // Fetch content without `.content` since it's not in the database
    $content = getContent('extensions_fusion_fair_extensions_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp

@if (!empty($data_values))
    <!-- Breadcrumb -->
    <section class="relative">
        <!-- Desktop Banner -->
        <img src="{{ asset('assets/images/frontend/extensions_fusion_fair_extensions_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
             alt="extensions" class="w-full md:block hidden bg-left">

        <!-- Overlay Text -->
        <div class="absolute inset-0 flex items-center md:justify-start justify-center max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col items-center justify-center text-center md:text-left">
                <h1 class="lg:text-[64px] text-[40px] md:text-black text-white md:mb-5 mb-2 uppercase">
                    {{ $data_values->title ?? 'Default Title' }}
                </h1>
                <p class="lg:text-[28px] md:text-[20px] md:text-black text-white">
                    {{ $data_values->subtitle ?? 'Default Subtitle' }}
                </p>
            </div>
        </div>

        <!-- Mobile Banner -->
        <img src="{{ asset('assets/images/frontend/extensions_fusion_fair_extensions_banner/' . ($data_values->banner_mobile ?? 'default.jpg')) }}"
             alt="extensions" class="w-full block md:hidden">
    </section>
@else
    <!-- Fallback Message -->
    <p class="text-center text-gray-500 mt-10">No banner data available.</p>
@endif
