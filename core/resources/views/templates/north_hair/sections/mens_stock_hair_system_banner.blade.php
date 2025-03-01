@php
    $content = getContent('mens_stock_hair_system_banner.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Breadcrumb -->
    <section class="relative">
        <img
            src="{{ asset('assets/images/frontend/mens_stock_hair_system_banner/' . ($data_values->banner_desktop ?? 'default.jpg')) }}"
            alt="{{ $data_values->title ?? 'Mens Hair' }}" class="w-full md:block hidden object-cover object-center">
            <div class="absolute inset-0 flex flex-col items-start justify-center max-w-screen-2xl mx-auto px-4">
                <div class="md:pr-0 pr-[55%]">
                    <h1 class="font-bold lg:text-[36px] md:text-[22px] sm:text-[38px] text-[22px] mb-2 leading-tight">
                        {{ $data_values->title }}</h1>
                    <ul class="list-disc lg:pl-7 md:pl-5 pl-3 lg:text-[30px] sm:text-[18px] text-[10px] leading-tight">
                        <li>
                            {{ $data_values->list_1 }}
                        </li>
                        <li>
                            {{ $data_values->list_2 }}
                        </li>
                        <li>
                            {{ $data_values->list_3 }}
                        </li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/frontend/mens_stock_hair_system_banner/' . ($data_values->banner_mobile ?? 'default.jpg')) }}" alt="Men" class="w-full block md:hidden object-cover object-center">
    </section>
@endif
