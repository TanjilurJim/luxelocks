@php
    $content = getMultipleContent('women_women_hair_systems_slider.element', true);
@endphp
<!-- Slider -->
@if ($content)
<section>
    <div class="1slideAuto overflow-hidden">
        @foreach($content as $slider)
            @php
                $dataValues = is_string($slider->data_values) ? json_decode($slider->data_values) : $slider->data_values;
            @endphp

            <div class="relative">
                <!-- Desktop Image -->
                <img src="{{ property_exists($dataValues, 'slider_banner') && $dataValues->slider_banner
                        ? asset('assets/images/frontend/women_women_hair_systems_slider/' . $dataValues->slider_banner)
                        : asset('assets/images/advertise-banner.webp') }}"
                     alt="{{ $dataValues->title ?? 'women-wigs-and-toppers' }}"
                     class="w-full 2xl:h-[612px] xl:h-[465px] lg:h-[350px] md:h-[267px] sm:block hidden object-cover object-center">

                <!-- Slider Content -->
                <div class="absolute inset-0 max-w-screen-2xl mx-auto px-4 md:flex block flex-col justify-center sm:py-0 py-5">
                    <div>
                        <h2 class="lg:text-[40px] md:text-[24px] text-[16px] font-bold">{{ $dataValues->title ?? 'Default Title' }}</h2>
                        @if (!empty($dataValues->sub_title1))
                            <p class="md:text-[20px] text-[14px]">{{ $dataValues->sub_title1 }}</p>
                        @endif
                        @if (!empty($dataValues->sub_title2))
                            <p class="md:text-[20px] text-[14px] sm:block hidden">{{ $dataValues->sub_title2 }}</p>
                        @endif
                    </div>

                    <!-- Button -->
                    <a href="{{ $dataValues->link ?? '#' }}"
                       class="absolute bottom-20 right-4 md:text-[28px] text-[14px] px-6 py-2 border border-black sm:block hidden">
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
