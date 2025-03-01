@php
    $content = getContent('mens_cap_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ $data_values->banner_desktop ? asset('assets/images/frontend/mens_cap_hair_system_banner/' . $data_values->banner_desktop) : asset('assets/images/default_image.jpg') }}" alt="Men" class="w-full object-right lg:h-[440px] h-[220px] object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center max-w-screen-xl mx-auto px-4">
            <h1 class="lg:text-[42px] md:text-[24px] text-[16px] font-bold text-white text-center mb-2 leading-tight">
                {{ $data_values->title_1 }} <br>
                {{ $data_values->title_2 }} </h1>
        </div>
    </section>
@endif
