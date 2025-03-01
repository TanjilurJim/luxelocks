@php
    $content = getContent('mens_lace_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)

    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ $data_values->banner_desktop ? asset('assets/images/frontend/mens_lace_hair_system_banner/' . $data_values->banner_desktop) : asset('assets/images/default_image.jpg') }}" alt="Men" class="w-full lg:h-[480px] h-[220px] object-cover object-center">
        <div class="absolute inset-0 flex flex-col items-center justify-center max-w-screen-2xl mx-auto px-4">
            <h1
                class="lg:text-[40px] md:text-[28px] text-[18px] text-white leading-tight text-center drop-shadow-md mt-[15%] uppercase">
                {{ $data_values->title_1 }}<br>
                <!--{{ $data_values->title_2 }}</h1>-->
        </div>
    </section>
@endif
