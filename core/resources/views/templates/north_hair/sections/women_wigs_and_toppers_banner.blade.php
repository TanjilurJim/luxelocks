@php
    $content = getContent('women_wigs_and_toppers_banner.content', true);
    $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp

@if ($dataValues && is_object($dataValues))
    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ asset('assets/images/frontend/women_wigs_and_toppers_banner/' . $dataValues->banner_desktop) }}"
             alt="Women wigs"
             class="w-full lg:h-[475px] h-[256px] md:block hidden object-cover object-center">
    
        <div class="absolute inset-0 flex md:flex-row flex-col md:items-center items-start md:justify-between justify-center max-w-screen-2xl mx-auto px-4">
            <h1 class="lg:text-[36px] text-[20px] font-bold md:mb-0 mb-5 md:pr-0 pr-[40%] leading-tight">
                {{ $dataValues->title ?? 'Default Title' }}
            </h1>
            <p class="md:text-center text-start lg:text-[30px] md:text-[20px] text-[16px] leading-tight">
                {{ $dataValues->subtitle1 ?? '' }} <br>
                {{ $dataValues->subtitle2 ?? '' }} <br>
                {{ $dataValues->subtitle3 ?? '' }}
            </p>
        </div>
    
        <img src="{{ asset('assets/images/frontend/women_wigs_and_toppers_banner/' . ($dataValues->banner_mobile ?? 'default.jpg')) }}"
             alt="Women wigs"
             class="w-full block md:hidden object-cover object-center">
    </section>

@endif
