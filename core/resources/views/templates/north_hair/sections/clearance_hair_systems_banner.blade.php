@php
    $content = getContent('clearance_hair_systems_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
    <section class="relative">
        <img src="{{ asset('assets/images/frontend/clearance_hair_systems_banner/' . $data_values->banner_desktop) }}" alt="Systems" class="w-full md:block hidden">
        <img src="{{ asset('assets/images/frontend/clearance_hair_systems_banner/' . $data_values->banner_mobile) }}" alt="Systems" class="w-full block md:hidden">
    </section>
@endif