@php
    $content = getContent('women_lace_front_product.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
    <!-- Men's Title -->
    <section>
        <div class="max-w-screen-xl mx-auto px-4 mt-2">
            <h2 class="md:text-[30px] text-[26px] font-bold">{{ $data_values->title }}</h2>
            <p class="text-[#444444]">{{ $data_values->details }}</p>
        </div>
    </section>
@endif

<!-- Stock Hair Items -->
<section class="max-w-screen-xl mx-auto px-4 mt-5">
    <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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
        <!-- item -->
        <div class="group relative">
            <a href="#">
                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-6-1-600x600.jpg" alt="Men's hair systems"
                    class="w-full transition-opacity duration-300 group-hover:opacity-0">

                <img src="assets/images/HS1-0.08mm-Thin-Skin-Hair-System-5.jpg" alt="Men's Hair System"
                    class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                <p class="text-[18px] mb-3 mx-5 mt-3">
                    <span class="font-bold">HS1 :</span> Thin Skin Men's Hair Systems 0.08mm Transparent Poly Skin
                </p>
            </a>
            <p class="text-[#696969] text-[17px] mx-5">Density : 100% - 120%</p>

            <div id="hover-container" class="relative">
                <div id="image-container" class="flex justify-between items-center gap-2 mt-2 mx-5">
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
                    </a>
                    <a href="#" class="h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                        <img src="assets/images/1-2-150x150.jpg" alt="HS1">
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

    </div>
    <div class="flex justify-center py-20">
        <button class="text-[#002548] hover:text-[#F9D161] font-semibold transition-all duration-300">
            Load More
        </button>
    </div>
</section>