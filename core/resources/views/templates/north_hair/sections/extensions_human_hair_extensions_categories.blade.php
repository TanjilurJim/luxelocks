<!-- Product Categories -->
<section class="max-w-screen-xl mx-auto px-4 md:py-12 sm:py-10 py-5">
    <h2 class="lg:text-[34px] md:text-[28px] text-[24px] text-center mb-10">Categories</h2>
    <div class="4slideAuto">
        @foreach($categories as $category)
            <a href="#">
                <img class="w-full h-auto" src="{{ $category->categoryImage() }}" alt="{{ $category->name }}">
                <p class="text-[20px] text-[#F5BB0C] text-center mt-2">{{ $category->name }}</p>
            </a>
        @endforeach
    </div>
</section>
