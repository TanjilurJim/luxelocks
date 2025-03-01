@php
$content = getContent('home_banner.content', true);
@endphp

@if ($content)
@php
$dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<!-- Hero Section -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/home_banner/' . $dataValues->banner_desktop) }}" alt="Background Image" class="w-full hidden md:block">
    <div
        class="max-w-screen-2xl mx-auto px-4 absolute inset-0 flex md:flex-row flex-col md:justify-between justify-end text-white">
        <div class="flex flex-col justify-center md:items-start items-center">
            <div class="flex md:flex-col flex-row md:justify-center justify-center">
                <h1 class="lg:text-[86px] md:text-[48px] sm:text-[24px]">Join Us at</h1>
                {{-- <div><img class="lg:h-[80px] md:h-[52px] sm:h-[44px] h-[24px]" src="{{ asset('assets/images/frontend/home_banner/' . $dataValues->event_logo) }}"
                        alt="logo"></div> --}}
                <h1 class="lg:text-[86px] md:text-[48px] sm:text-[24px]">{{ $dataValues->title }}</h1>
            </div>
            <p class="lg:text-[30px] md:text-[20px] md:pr-[30%] pr-0 leading-tight md:text-left text-center">{{ $dataValues->subtitle }}</p>
            <div class="mt-10 lg:block hidden">
                <a class="text-[16px] border border-white lg:px-20 px-10 lg:py-[18px] md:py-[10px] py-[6px] hover:text-black hover:bg-white transition-all duration-300"
                    href="{{ $dataValues->link }}">VIEW MORE</a>
            </div>
        </div>
        <div class="flex flex-col md:items-end items-center justify-end leading-tight sm:mb-32 mb-10">
            <p class="lg:text-[64px] md:text-[36px] text-[32px]">{{ $dataValues->date }}</p>
            <p class="lg:text-[80px] md:text-[43px] text-[40px] font-bold">{{ $dataValues->booth }}</p>
            <p class="lg:text-[30px] md:text-[16px] text-[15px]">{{ $dataValues->location }}</p>
            <div class="mt-5 lg:hidden block">
                <a class="text-[16px] border border-white lg:px-20 px-10 lg:py-[18px] md:py-[10px] py-[6px] hover:text-black hover:bg-white transition-all duration-300"
                    href="{{ $dataValues->link }}">VIEW MORE</a>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/frontend/home_banner/' . $dataValues->banner_mobile) }}" alt="Background Image" class="w-full block md:hidden">
</section>
@endif