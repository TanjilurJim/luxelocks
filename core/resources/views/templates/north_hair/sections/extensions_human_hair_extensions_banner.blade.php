@php
    $content = getContent('extensions_human_hair_extensions_banner.content', true);
    $data_values = $content ? (is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values) : null;

    // dd($data_values);
    // Provide default values if $data_values is null or properties are missing
    // $data_values = $data_values ?? (object) [
    //     'banner_desktop' => 'default_desktop.jpg',
    //     'banner_mobile' => 'default_mobile.jpg',
    //     'title' => 'Default Title',
    //     'list_1' => 'Default List 1',
    //     'list_1_span' => 'Default Span',
    //     'list_2' => 'Default List 2',
    //     'link_1' => '#',
    //     'link_2' => '#',
    // ];
    // dd($data_values); // Uncomment to debug
@endphp



@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/extensions_human_hair_extensions_banner/' . ($data_values->banner_desktop ?? 'default_desktop.jpg')) }}" alt="Extensions" class="w-full lg:h-[475px] h-[256px] md:block hidden object-cover object-center">
    <div class="absolute inset-0 flex flex-col justify-center lg:gap-5 md:gap-2 gap-0 max-w-screen-xl mx-auto px-4">
        <h1 class="lg:text-[36px] md:text-[28px] text-[14px] font-bold md:mb-0 mb-5 md:pr-0 pr-[40%] leading-tight">
            {{ $data_values->title ?? 'Default Title' }}</h1>
        <p class="italic lg:text-[36px] md:text-[24px] text-[14px]">
            {{ $data_values->subtitle1 ?? 'Default List 1' }}
            <span class="font-bold">{{ $data_values->subtitle2 ?? 'Default Span' }}</span>
        </p>
        <p class="italic lg:text-[36px] md:text-[24px] text-[14px]">
            {{ $data_values->subtitle3 ?? 'Default List 2' }}
        </p>
        <div class="flex gap-10">
            <a class="bg-[#F5BB0C] text-white lg:text-[26px] md:text-[18px] text-[12px] px-[30px] py-[15px]"
                href="{{ $data_values->link_1 ?? '#' }}">Apply For Wholesale</a>
            <a class="bg-[#F5BB0C] text-white lg:text-[26px] md:text-[18px] text-[12px] px-[30px] py-[15px]"
                href="{{ $data_values->link_2 ?? '#' }}">All Products</a>
        </div>
    </div>
    <img src="{{ asset('assets/images/frontend/extensions_human_hair_extensions_banner/' . ($data_values->banner_mobile ?? 'default_mobile.jpg')) }}" alt="Men" class="w-full block md:hidden object-cover object-center">
</section>
@else
<p class="text-center py-10">No content available.</p>
@endif
