@php
    // Retrieve banner content
    $content_1 = getContent('mens_custom_hair_system_banner1.content', true);
    $content_2 = getContent('mens_custom_hair_system_banner2.content', true);

    // Decode JSON content
    $banner_1 = isset($content_1->banner_1) && is_string($content_1->banner_1)
                ? json_decode($content_1->banner_1)
                : null;

    $banner_2 = isset($content_2->banner_2) && is_string($content_2->banner_2)
                ? json_decode($content_2->banner_2)
                : null;

@endphp

<!-- Brand Section -->
<section class="grid md:grid-cols-2 grid-cols-1 gap-5 max-w-screen-xl mx-auto px-4 md:py-20 py-10">
    <!-- Banner 1 -->
    @if($banner_1)
    <div class="relative">
        <img src="{{ asset('assets/b2c/assets/images/brand-ambassador-img.jpg') }}" alt="Banner 1"
            class="w-full object-right lg:h-[440px] h-[220px]">
        <div class="absolute inset-0 flex flex-col justify-between bg-white bg-opacity-60 m-7 p-7">
            <h2 class="text-[26px] font-bold text-[#306AED] text-center mb-2 leading-tight self-center">
                {{ $banner_1->title ?? 'Default Title' }}
            </h2>
            <p class="text-[#012340]">
                {{ $banner_1->details ?? 'Default Details' }}
            </p>
            <a href="{{ $banner_1->link ?? '#' }}"
                class="text-center text-white font-bold bg-[#306AED] border border-[#306AED] hover:text-[#306AED] hover:bg-white px-[34px] py-[10px] mt-4 rounded-full self-center transition-all duration-300">
                Apply Now
            </a>
        </div>
    </div>
    @endif

    <!-- Banner 2 -->
    @if($banner_2)
    <div class="relative">
        <img src="{{ asset('assets/images/exclusive-wholesaler.jpg') }}" alt="Banner 2"
            class="w-full object-right lg:h-[440px] h-[220px]">
        <div class="absolute inset-0 flex flex-col items-center justify-between px-4 my-14 mx-5">
            <h2 class="text-[34px] font-bold mb-2 leading-tight text-center">
                {{ $banner_2->title ?? 'Default Title' }}
            </h2>
            <p class="text-[#012340]">
                {{ $banner_2->details ?? 'Default Details' }}
            </p>
            <a href="{{ $banner_2->link ?? '#' }}"
                class="text-center text-white font-bold bg-[#306AED] border border-[#306AED] hover:text-[#306AED] hover:bg-white px-[34px] py-[10px] mt-4 rounded-full transition-all duration-300">
                Apply Now
            </a>
        </div>
    </div>
    @endif
</section>


