@php
    $content = getContent('mens_afro_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ asset('assets/images/frontend/mens_afro_hair_system_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
            alt="{{ $data_values->title ?? 'Mens Hair Afro' }}" class="w-full lg:h-[480px] h-[220px] object-cover object-center">
    </section>
@endif
