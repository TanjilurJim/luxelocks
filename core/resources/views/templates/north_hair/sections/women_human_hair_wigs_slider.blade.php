@php
    $content = getMultipleContent('women_human_hair_wigs_slider.element', true);
@endphp

@if ($content)
<section>
    <div class="1slideAuto">
        @foreach($content as $slider)
            @php
                $dataValues = is_string($slider->data_values) ? json_decode($slider->data_values) : $slider->data_values;
            @endphp

            <div class="relative">
                <!-- Desktop Image -->
                <img src="{{ property_exists($dataValues, 'slider_banner') && $dataValues->slider_banner
                        ? asset('assets/images/frontend/women_human_hair_wigs_slider/' . $dataValues->slider_banner)
                        : asset('assets/images/advertise-banner.webp') }}"
                     alt="{{ $dataValues->title ?? 'women_human_hair_wigs' }}"
                     class="w-full 2xl:h-[612px] xl:h-[465px] lg:h-[350px] md:h-[267px] sm:block hidden object-cover object-center">

                <!-- Slider Content -->
                <div class="absolute inset-0 max-w-screen-2xl mx-auto px-4 flex flex-col justify-center">
                    <div>
                        <h2 class="text-[40px] font-bold mb-10">{{ $dataValues->title ?? 'Default Title' }}</h2>
                        @if (!empty($dataValues->sub_title1))
                            <p class="text-[20px]">{{ $dataValues->sub_title1 }}</p>
                        @endif
                        @if (!empty($dataValues->sub_title2))
                            <p class="text-[20px]">{{ $dataValues->sub_title2 }}</p>
                        @endif
                    </div>

                    <!-- Button -->
                    <a href="{{ $dataValues->link ?? '#' }}"
                       class="absolute bottom-20 right-4 text-[28px] px-6 py-2 border border-black">
                        {{ $dataValues->link ? 'Apply Now' : 'Apply Now' }}
                    </a>
                </div>

                <!-- Mobile Image (Optional) -->
                {{-- <img src="{{ property_exists($dataValues, 'mobile_slider') && $dataValues->mobile_slider
                        ? asset('assets/images/frontend/women_wigs_and_toppers_slider/' . $dataValues->mobile_slider)
                        : asset('assets/images/mobile-advertise-banner1.webp') }}"
                     alt="{{ $dataValues->title ?? 'women-wigs-and-toppers' }}"
                     class="w-full sm:hidden block"> --}}
            </div>
        @endforeach
    </div>
</section>
@endif
