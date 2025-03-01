@php
    $content = getContent('extensions_fusion_fair_extensions_produc', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
@endphp
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@if ($data_values)
    <!-- Title -->
    <section>
        <div class="max-w-screen-xl mx-auto px-4 mt-2">
            <h2 class="md:text-[30px] text-[26px] font-bold">{{ $data_values->title }}</h2>
            <p class="text-[#444444]">{{ $data_values->details }}</p>
        </div>
    </section>
@endif

@if ($products->count())
    <!-- Stock Hair Items -->
    <section class="max-w-screen-xl mx-auto px-4 mt-5">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
            @foreach ($products as $product)
                <div class="group relative">
                    <a href="{{ route('product.detail', $product->slug) }}">
                        <!-- Main Image -->
                        <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                            class="w-full transition-opacity duration-300 group-hover:opacity-0">

                        <!-- Hover Image (First Gallery Image) -->
                        @if ($product->galleryImages->count() > 0)
                            <img src="{{ $product->galleryImages->first()->full_url }}" alt="{{ $product->name }}"
                                class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        @endif

                        <p class="text-[18px] mb-3 mx-5 mt-3">
                            <span class="font-bold">{{ $product->sku ?? 'SKU:' }} :</span> {{ $product->name }}
                        </p>
                    </a>

                    <p class="text-[#696969] text-[17px] mx-5">
                        @if (Auth::check())
                            Price:
                            @if ($product->sale_price)
                                <span class="line-through">${{ number_format($product->regular_price, 2) }}</span>
                                <span class="text-red-500">${{ number_format($product->sale_price, 2) }}</span>
                            @else
                                ${{ number_format($product->regular_price, 2) }}
                            @endif
                        @endif
                    </p>

                    <!-- Gallery Thumbnails -->
                    <div class="relative">
                        <div class="flex items-center gap-2 mt-2 mx-5">
                            @foreach ($product->galleryImages->take(5) as $image)
                                <a href="#"
                                    class="thumbnail h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                                    <img src="{{ $image->thumb_url }}" alt="{{ $product->name }}">
                                </a>
                            @endforeach

                            @if ($product->galleryImages->count() > 5)
                                <button class="show-more-btn flex items-center ml-2"
                                    data-product-id="{{ $product->id }}">
                                    <div
                                        class="toggle-icon h-6 w-6 rounded-full bg-[#444444] text-white flex justify-center items-center">
                                        +
                                    </div>
                                    <span class="ml-2 text-gray-700 show-more-text">
                                        {{ $product->galleryImages->count() - 5 }} more
                                    </span>
                                </button>
                            @endif
                        </div>

                        <!-- Extra images (initially hidden) -->
                        <div class="hidden extra-thumbnails flex gap-2 mt-2 mx-5"
                            data-product-id="{{ $product->id }}">
                            @foreach ($product->galleryImages->skip(5) as $image)
                                <a href="#"
                                    class="thumbnail h-7 w-7 p-[2px] block border hover:border-[#F1C342] transition-all duration-200">
                                    <img src="{{ $image->thumb_url }}" alt="{{ $product->name }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center py-10">
            {{ $products->onEachSide(1)->links('vendor.pagination.tailwind') }}
        </div>
    </section>
@else
    <p class="text-center text-gray-500 mt-10">No products available.</p>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".show-more-btn").forEach(button => {
            button.addEventListener("click", function() {
                let productId = this.getAttribute("data-product-id");
                let moreImagesContainer = document.querySelector(
                    `.extra-thumbnails[data-product-id='${productId}']`);
                let showMoreText = this.querySelector(".show-more-text");
                let toggleIcon = this.querySelector(".toggle-icon");

                if (moreImagesContainer) {
                    moreImagesContainer.classList.toggle("hidden"); // Toggle visibility

                    if (!moreImagesContainer.classList.contains("hidden")) {
                        // Expand: Change button text to "Show Less" and icon to "-"
                        showMoreText.textContent = "Show Less";
                        toggleIcon.textContent = "−";
                    } else {
                        // Collapse: Reset button text back to "+ X more" and icon to "+"
                        let remainingImages = moreImagesContainer.querySelectorAll("a").length;
                        showMoreText.textContent = `+ ${remainingImages} more`;
                        toggleIcon.textContent = "+"; // Ensure minus disappears
                    }
                }
            });
        });
    });
</script>
