@php
    $content = getContent('mens_mono_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)

   <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ $data_values->banner_desktop ? asset('assets/images/frontend/mens_mono_hair_system_banner/' . $data_values->banner_desktop) : asset('assets/images/default_image.jpg') }}" alt="Men" class="w-full  object-cover object-center lg:h-[440px] h-[220px]">
        <div
            class="absolute inset-0 flex flex-col md:items-end items-center justify-center max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col items-center">
                <h1
                    class="lg:text-[48px] md:text-[24px] text-[19px] text-white text-center mb-2 leading-tight uppercase">
                    {{ $data_values->title_1 }} <br>
                    {{ $data_values->title_2 }}</h1>
                <p class="lg:text-[34px] md:text-[22px] text-[20px] text-[#FFAC24]">{{ $data_values->sub_title }}
                </p>
            </div>
        </div>
    </section>
@endif
