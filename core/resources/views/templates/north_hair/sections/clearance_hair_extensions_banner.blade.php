@php
    $content = getContent('clearance_hair_extensions_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- breadcrumb -->
    <section>
        <img class="md:block hidden" src="{{ asset('assets/images/frontend/clearance_hair_extensions_banner/' . $data_values->banner_desktop) }}" alt="Extensions">
        <img class="block md:hidden" src="{{ asset('assets/images/frontend/clearance_hair_extensions_banner/' . $data_values->banner_mobile) }}" alt="Extensions">
    </section>
@endif