@if ($product_categories->isNotEmpty())
<!-- Product Categories -->
<section class="max-w-screen-xl mx-auto px-4 md:py-12 sm:py-5 py-1">
    <h2 class="lg:text-[40px] md:text-[28px] text-[24px] text-center mb-3">Categories</h2>
    <div class="grid md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($product_categories as $category)
            <a href="{{ route('category.details', ['slug' => $category->slug]) }}">
                <img class="w-[280px] h-[280px]" src="{{ $category->categoryImage() }}" alt="{{ $category->name }}">
                <p class="text-[20px] text-center mt-2">{{ $category->name }}</p>
            </a>
        @endforeach
    </div>
</section>
@else
    <p class="text-center text-lg mt-4">No categories found for Women.</p>
@endif
