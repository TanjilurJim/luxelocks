@php
    $content = getContent('mens_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp

@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <!-- Desktop Banner -->
        <img src="{{ asset('assets/images/frontend/mens_hair_system_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
             alt="{{ $data_values->title ?? '' }}"
             class="w-full md:block hidden bg-left">

        <div class="absolute inset-0 flex items-center justify-start max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col items-start justify-start">
                <p class="text-black lg:text-[36px] md:text-[20px] text-[18px] font-bold text-center px-10 lg:block hidden">
                    {{ $data_values->banner_text ?? '' }}
                </p>
                <p class="text-black text-[18px] font-bold text-start sm:px-10 px-5 block lg:hidden md:pr-0 pr-[50%]">
                    {{ $data_values->banner_text ?? '' }}
                </p>
            </div>
        </div>

        <!-- Mobile Banner -->
        <img src="{{ asset('assets/images/frontend/mens_hair_system_banner/' . ($data_values->banner_mobile ?? 'default.jpg')) }}"
             alt="{{ $data_values->title ?? 'Weft Extensions' }}"
             class="w-full block md:hidden">
    </section>
@endif
