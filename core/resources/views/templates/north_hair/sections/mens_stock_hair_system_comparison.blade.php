@php
    $content = getContent('mens_stock_hair_system_comparison.content', true);
    $element = getMultipleContent('mens_stock_hair_system_comparison.element', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp

    <!-- Before After -->
    <section>
        <div>
            @if ($data_values)
            <h2 class="font-[900] text-[34px] text-center mb-5">{{ $data_values->title }}</h2>
            <p class="text-[#4E4E4E] font-semibold text-center mb-10">{{ $data_values->sub_title }}</p>
            @endif

            <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-3 grid-cols-1 gap-10">
                @foreach ($element as $element)
                    @php
                        $dataValues = is_string($element->data_values)
                            ? json_decode($element->data_values)
                            : $element->data_values;
                        // dd($dataValues);
                    @endphp
                <div class="relative">
                    <img src="{{ $dataValues->comparison ? asset('assets/images/frontend/mens_hair_system_comparison/' . $dataValues->comparison) : '' }}" alt="Hair Systems" class="w-full">
                    <div class="absolute inset-0 flex flex-col items-center justify-center mx-auto mt-52">
                        <p class="text-white text-[18px] font-bold text-center mb-5">
                            {{ $dataValues->title }} <br>
                            {{ $dataValues->sub_title }}
                        </p>
                        <a class="px-[10px] py-[7px] border border-white rounded-md text-white bg-transparent hover:bg-white hover:text-black transition-all duration-300"
                            href="{{ $dataValues->link }}">Click to shop</a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="flex justify-center py-5">
                <a class="font-[20px] text-[#306AED] border-b border-[#306AED] scale-100 hover:scale-110 transition-all duration-300"
                    href="#">More</a>
            </div>
        </div>
    </section>
