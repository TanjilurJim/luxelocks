@php
    $content = getContent('mens_crown_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($data_values);
@endphp
@if ($data_values)

    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ $data_values->banner_desktop ? asset('assets/images/frontend/mens_crown_hair_system_banner/' . $data_values->banner_desktop) : asset('assets/images/default_image.jpg') }}" alt="Men" class="w-full object-right lg:h-[440px] h-[220px] object-cover object-left">
    </section>

@endif
