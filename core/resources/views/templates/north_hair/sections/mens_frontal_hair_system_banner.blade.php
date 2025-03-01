@php
    $content = getContent('mens_frontal_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <!-- Desktop Banner -->
        <img src="{{ asset('assets/images/frontend/mens_frontal_hair_system_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
             alt="{{ $data_values->title ?? 'Mens Frontal Hair' }}"
             class="w-full lg:h-[480px] h-[220px] object-cover object-center">

        <div class="absolute inset-0 flex items-center justify-center max-w-screen-xl mx-auto px-4 py-10">
            <div class="flex flex-col items-start justify-center">
                 <h1
                    class="lg:text-[42px] md:text-[22px] text-[16px] text-[#FFC426] font-bold text-center leading-tight uppercase drop-shadow-md text-center">
                    {{ $data_values->title_1 ?? 'Default Title' }}
                    <br>
                    {{ $data_values->title_2 ?? 'Default Title' }}
                </h1>
        </div>

        <!-- Mobile Banner -->
        <!--<img src="{{ asset('assets/images/frontend/mens_frontal_hair_system_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"-->
        <!--     alt="{{ $data_values->title_1 ?? 'Weft Extensions' }}"-->
        <!--     class="w-full block md:hidden object-cover object-center">-->
    </section>
@endif

