@php
$content = getContent('home_hair_extensions.content', true);
@endphp

@if ($content)
@php
$dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<!-- Hair Extensions -->
<section class="bg-[#F8F8F8]">
    <div class="max-w-screen-2xl mx-auto px-4 py-12">
        <h2 class="text-[34px] text-center mb-5">Hair Extensions</h2>
        <p class="text-[18px] text-center text-[#444444]">Bestsellers</p>
        <div class="4slide mt-5">
            <div class="rounded-md overflow-hidden relative flex flex-col h-full"><img
                    src="assets/images/haie-extension-main.webp" alt="men-hair-systems">
                <a class="bg-white text-[#306AED] absolute bottom-10 ml-[50%] -translate-x-[50%] border border-white hover:bg-transparent hover:text-white transition-all duration-200 px-8 py-3"
                    href="#">View
                    More</a>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/GENIUS-WEFT-Hair-Extensions-7-Star-Full-Cuticle-Remy-Hair-A-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>GENIUS-WEFT : Hair Extensions, 7-Star Full Cuticle Remy Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/TAPE-IN-Extensions-Human-Hair-With-Full-Cuticles-7-Star-Quality-q-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>TAPE-IN : Extensions Human Hair With Full Cuticles, 7-Star Quality</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/FLAT-TIP-Keratin-Bond-Hair-Extensions-7-Star-Full-Cuticle-Remy-Hair-A-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>I-TIP : Keratin Bond Hair Extensions, 7-Star Full Cuticle Remy Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/FLAT-TIP-Keratin-Bond-Hair-Extensions-7-Star-Full-Cuticle-Remy-Hair-A-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>FLAT-TIP : Keratin Bond Hair Extensions 7-Star Full Cuticle Remy Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/CLIP-IN-Human-Hair-Extensions-With-6-Star-Remy-Hair-C-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>CLIP-IN-FULL-SET : Hair Extensions With 6-Star Human Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif