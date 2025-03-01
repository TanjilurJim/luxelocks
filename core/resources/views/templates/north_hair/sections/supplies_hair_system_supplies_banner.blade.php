@php
    $content = getContent('supplies_hair_system_supplies_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Breadcrumb -->
<section class="grid md:grid-cols-3 grid-cols-1 gap-6 p-6">
    <a href="{{ $data_values->tools_link }}" class="relative group">
        <img class="w-full" src="{{ asset('assets/images/frontend/supplies_hair_system_supplies_banner/' . $data_values->tools) }}" alt="Ordering">
        <div
            class="absolute bottom-0 flex items-center justify-center w-full p-5 bg-[#ADADAD] bg-opacity-80 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <p class="text-white font-bold text-[18px]">Ordering Tools</p>
        </div>
    </a>
    <a href="{{ $data_values->tapes_link }}" class="relative group">
        <img class="w-full" src="{{ asset('assets/images/frontend/supplies_hair_system_supplies_banner/' . $data_values->tapes) }}" alt="Tapes">
        <div
            class="absolute bottom-0 flex items-center justify-center w-full p-5 bg-[#ADADAD] bg-opacity-80 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <p class="text-white font-bold text-[18px]">Tapes</p>
        </div>
    </a>
    <a href="{{ $data_values->others_link }}" class="relative group">
        <img class="w-full" src="{{ asset('assets/images/frontend/supplies_hair_system_supplies_banner/' . $data_values->others) }}" alt="Others">
        <div
            class="absolute bottom-0 flex items-center justify-center w-full p-5 bg-[#ADADAD] bg-opacity-80 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <p class="text-white font-bold text-[18px]">Others</p>
        </div>
    </a>
</section>
@endif