@php
    $content = getContent('mens_custom_hair_system_helpme.content', true);
    $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($dataValues)

    <!-- Artificial guide -->
    <section class="flex sm:flex-row flex-col gap-10 items-center justify-between max-w-screen-xl mx-auto px-4 pb-10">
        <p class="text-[22px]">{{ $dataValues->title }}</p>
        <a class="text-[#306AED] font-semibold border border-[#306AED] px-[30px] py-[13px] rounded-full" href="{{ $dataValues->link }}">Help
            me custom</a>
    </section>
@endif
