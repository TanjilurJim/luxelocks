@php
    $content = getContent('mens_custom_hair_system_product.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Stock Title -->
    <section>
        <div class="max-w-screen-xl mx-auto px-4 mt-2">
            <h1 class="md:text-[40px] sm:text-[32px] text-[26]">{{ $data_values->title }}</h1>
            <p class="text-[#444444]">{{ $data_values->details }}</p>
        </div>
        <div class="flex sm:flex-row flex-col items-center justify-center gap-4 py-4 mt-10">
            <a class="px-[30px] py-3 bg-[#306AED] hover:bg-[#F9D161] text-white font-bold transition-all duration-300 rounded-full"
                href="{{ $data_values->customize_link }}">VIEW OUR CUSTOMIZED
                OPTIONS</a>
            <a class="px-[30px] py-3 bg-[#306AED] hover:bg-[#F9D161] text-white font-bold transition-all duration-300 rounded-full"
                href="{{ $data_values->order_link }}">Download order
                form</a>
        </div>
    </section>
@endif
<!-- Men's Hair Items -->
<section class="max-w-screen-xl mx-auto px-4">
    <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
        @foreach ($products as $product)
            <!-- item -->
            <div class="group relative">
                <a href="#">
                    <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                        class="w-full transition-opacity duration-300 group-hover:opacity-0">

                    <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                        class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                    <p class="text-[18px] mb-3 mx-5 mt-3">
                        <span class="font-bold">HS1 :</span> {{ $product->name }}
                    </p>
                </a>
                <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

                <div id="hover-container" class="relative">
                    <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                        <a href="#"
                            class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                            <img src="{{ asset('assets/b2c/assets/img/1-2-150x150.jpg') }}" alt="HS1">
                        </a>
                        <a href="#"
                            class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                            <img src="{{ asset('assets/b2c/assets/img/1-2-150x150.jpg') }}" alt="HS1">
                        </a>
                        <a href="#"
                            class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                            <img src="{{ asset('assets/b2c/assets/img/1-2-150x150.jpg') }}" alt="HS1">
                        </a>
                        <a href="#"
                            class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                            <img src="{{ asset('assets/b2c/assets/img/1-2-150x150.jpg') }}" alt="HS1">
                        </a>
                        <a href="#"
                            class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                            <img src="{{ asset('assets/b2c/assets/img/1-2-150x150.jpg') }}" alt="HS1">
                        </a>

                        <button id="show-more-btn" class="flex items-center ml-10">
                            <div class="h-6 w-6 rounded-full bg-[#444444] text-white flex justify-center items-center">
                                +
                            </div>
                            <span id="image-count" class="ml-2 text-gray-700"></span>
                        </button>
                    </div>
                </div>
                <div id="more-images" class="grid grid-cols-10 gap-2 mt-4 hide border-t"></div>
            </div>
        @endforeach

    </div>
    <div class="flex justify-center py-20">
        <button class="text-[#002548] hover:text-[#F9D161] font-semibold transition-all duration-300">
            Load More
        </button>
    </div>
</section>
