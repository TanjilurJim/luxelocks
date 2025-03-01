@php
    $content = getContent('women_medical_grade_wigs_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="relative">
    <img src="{{ asset('assets/images/frontend/women_medical_grade_wigs_banner/' . $data_values->banner_desktop) }}" alt="medical" class="w-full md:block hidden object-cover object-center">
    <div
        class="absolute inset-0 flex items-center justify-end max-w-screen-2xl mx-auto px-4 lg:pl-[30%] md:pl-[40%] sm:pl-[42%] pl-[40%]">
        <ul
            class="list-disc lg:text-[32px] text-[20px] text-[#444444] grid md:grid-cols-2 grid-cols-1 md:gap-x-20 gap-x-0 md:gap-y-8 gap-y-0">
            <li>{{ $data_values->list_1 }}</li>
            <li>{{ $data_values->list_2 }}</li>
            <li>{{ $data_values->list_3 }}</li>
            <li>{{ $data_values->list_4 }}</li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/frontend/women_medical_grade_wigs_banner/' . $data_values->banner_mobile) }}" alt="medical" class="w-full block md:hidden object-cover object-center">
</section>
@endif