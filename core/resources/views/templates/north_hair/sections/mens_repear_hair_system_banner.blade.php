@php
    $content = getContent('mens_repear_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)

<section class="max-w-screen-xl mx-auto py-5">
    <img src="{{ $data_values->banner_image ? asset('assets/images/frontend/mens_repear_hair_system_banner/' . $data_values->banner_image) : asset('assets/images/default_image.jpg') }}" alt="repair" class="w-full">
</section>
@endif
