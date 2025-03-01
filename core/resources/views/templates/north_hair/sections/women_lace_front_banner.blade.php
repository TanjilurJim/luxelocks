@php
    $content = getContent('women_lace_front_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_lace_front_banner/' . $data_values->banner_desktop) }}" alt="lace" class="w-full md:block hidden bg-left">
    <div class="absolute inset-0 flex items-center max-w-screen-xl mx-auto px-4">
        <ul class="list-disc lg:text-[32px] text-[20px] grid gap-2 sm:pr- pr-[45%]">
            <li>{{ $data_values->list_1 }}</li>
            <li>{{ $data_values->list_2 }}</li>
            <li>{{ $data_values->list_3 }}</li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/frontend/women_lace_front_banner/' . $data_values->banner_mobile) }}" alt="lace" class="w-full block md:hidden">
</section>
@endif