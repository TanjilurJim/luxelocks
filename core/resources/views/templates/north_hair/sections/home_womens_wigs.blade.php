@php
$content = getContent('home_womens_wigs.content', true);
@endphp

@if ($content)
@php
$dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<!-- Women's Wigs and Toppers -->
<section class="bg-[#F8F8F8]">
    <div class="max-w-screen-2xl mx-auto px-4 py-12">
        <h2 class="text-[34px] text-center mb-5">Women's Wigs and Toppers</h2>
        <p class="text-[18px] text-center text-[#444444]">Bestsellers</p>
        <div class="4slide mt-5">
            <div class="rounded-md overflow-hidden relative flex flex-col h-full"><img
                    src="assets/images/women-hair-and-wigs-main.webp" alt="men-hair-systems">
                <a class="bg-white text-[#306AED] absolute bottom-10 ml-[50%] -translate-x-[50%] border border-white hover:bg-transparent hover:text-white transition-all duration-200 px-8 py-3"
                    href="#">View
                    More</a>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/HEATHER-Remy-Hair-Medical-Wig-with-Hand-Tied-Lace-wholesale-at-Newtimes-Hair-NT-4-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>HEATHER : Fully Hand-Tied Lace Wig With Fine Mongolian Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/NATALIE-Hand-Tied-Lace-Wigs-Premium-Mongolian-Remy-Hair-for-caucasion-women-Newtimes-Hair-5-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>NATALIE : 100% Hand-Tied Lace Wig With Diamond Lace Top</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/SIDNEY-Mono-Human-Hair-Topper-order-from-NEWTIMES-HAIR-T-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>SIDNEY : Mono Human Hair Topper Premium Mongolian Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/ELOISE-Fine-Welded-Mono-Hair-Topper-order-from-NEWTIMES-HAIR-4-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>ELOISE : Fine Welded Mono Hair Topper First-Class Mongolian Hair</p>
                    <div>
                        <a class="text-[#306AED] border-b border-[#306AED]" href="#">Get a
                            Wholesale Price</a>
                    </div>
                </div>
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/KAILANI-High-Grade-Remy-Human-Hair-Topper-order-from-NEWTIMES-HAIR-W-600x600.jpg"
                    alt="men-hair-systems">
                <div class="bg-white p-5 flex flex-col justify-between">
                    <p>KAILANI : High-Grade Remy Human Hair Topper With Fine Mongolian Hair</p>
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