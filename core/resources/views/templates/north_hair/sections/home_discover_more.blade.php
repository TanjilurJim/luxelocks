@php
$content = getContent('home_discover_more.content', true);
@endphp

@if ($content)
@php
$dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<!-- Video: Piece Worth It -->
<section class="relative lg:py-60 md:py-40 py-20 w-full">
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
        <source src="assets/videos/Newtimes_Hair_homepage_video_x7dtb3.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

    <div class="relative z-10 flex flex-col items-center justify-center h-full w-full text-center text-white px-4">
        <h2 class="text-[40px] font-bold mb-4">{{ $dataValues->title }}</h2>
        <p class="text-[22px] mb-4">
            {{ $dataValues->subtitle1 }}
        </p>
        <p class="text-[22px] mb-6">{{ $dataValues->subtitle2 }}</p>
        <a href="{{ $dataValues->link }}"
            class="px-6 py-3 bg-white text-[#306AED] font-semibold border border-white rounded-md hover:bg-transparent hover:text-white transition-all duration-300">
            Discover More
        </a>
    </div>
</section>
@endif
