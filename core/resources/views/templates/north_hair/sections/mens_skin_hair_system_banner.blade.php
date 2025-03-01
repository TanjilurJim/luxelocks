
@php
    $content = getContent('mens_skin_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)

    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ $data_values->banner_desktop ? asset('assets/images/frontend/mens_skin_hair_system_banner/' . $data_values->banner_desktop) : asset('assets/images/default_image.jpg') }}" alt="Men" class="w-full lg:h-[480px] h-[220px] object-cover object-center">
        <div
            class="absolute inset-0 flex flex-col md:items-start items-center justify-center max-w-screen-xl mx-auto px-4">
            <div class="lg:mt-[15%] mt-[10%]">
                <h1
                    class="lg:text-[44px] md:text-[23px] text-[20px] text-white text-center font-bold uppercase lg:mb-5 mb-1">
                    {{ $data_values->title_1 }}</h1>
                <p
                    class="lg:text-[34px] md:text-[18px] text-[16px] text-white lg:border-2 border-[1px] lg:leading-10 leading-5 border-white">
                    {{ $data_values->title_2 }}
                </p>
            </div>
        </div>
    </section>
@endif
