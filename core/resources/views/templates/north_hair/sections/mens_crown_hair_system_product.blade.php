@php
    $content = getContent('mens_crown_hair_system_product.content', true);
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
<!-- Men's Stock Hair Items -->
@if ($products->count())
    <!-- Stock Hair Items -->
    <section class="max-w-screen-xl mx-auto px-4 mt-5" id="product-list">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-5" id="product-grid">
            @foreach ($products as $product)
                <div class="product-item group relative">
                    <a href="{{ url('/product/' . $product->slug) }}"> <!-- Changed to direct URL -->
                        <!-- Main Image -->
                        <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                            class="w-full transition-opacity duration-300 group-hover:opacity-0">

                        <!-- Hover Image (First Gallery Image) -->
                        @if ($product->galleryImages->count() > 0)
                            <img src="{{ $product->galleryImages->first()->full_url }}" alt="{{ $product->name }}"
                                class="w-full absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        @endif

                        <p class="text-[18px] mb-3 mx-5 mt-3">
                            <span class="font-bold">{{ $product->sku ?? 'SKU:' }} :</span>
                            <strong>{{ $product->name }}</strong>
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

        <!-- Load More and Collapse Buttons -->
        <div class="flex justify-center py-10">
            @if ($products->hasMorePages())
                <button id="load-more-btn" data-next-page="{{ $products->currentPage() + 1 }}"
                    class="text-[#002548] hover:text-[#F9D161] font-semibold transition-all duration-300">
                    Load More
                </button>
            @endif

            <button id="collapse-btn"
                class="hidden text-[#002548] hover:text-red-500 font-semibold transition-all duration-300 ml-4">
                Show Less
            </button>
        </div>
    </section>
@else
    <p class="text-center text-gray-500 mt-10">No products available.</p>
@endif

<!-- JavaScript for Expand/Collapse and Load More -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const productGrid = document.getElementById('product-grid');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const collapseBtn = document.getElementById('collapse-btn');
        const initialProducts = [...document.querySelectorAll('.product-item')]; // Save initial state

        // Load More Products
        loadMoreBtn?.addEventListener('click', function() {
            let nextPage = this.getAttribute('data-next-page');
            loadMoreBtn.textContent = 'Loading...';

            fetch(`?page=${nextPage}`)
                .then(response => response.text())
                .then(data => {
                    let parser = new DOMParser();
                    let htmlDoc = parser.parseFromString(data, 'text/html');
                    let newProductsHTML = htmlDoc.querySelector('#product-grid').innerHTML;
                    let hasMorePages = htmlDoc.querySelector('#load-more-btn');

                    productGrid.insertAdjacentHTML('beforeend', newProductsHTML);

                    if (!hasMorePages) {
                        loadMoreBtn.classList.add(
                        'hidden'); // Hide Load More button if no more pages
                    } else {
                        loadMoreBtn.setAttribute('data-next-page', parseInt(nextPage) + 1);
                        loadMoreBtn.textContent = 'Load More'; // Reset button text
                    }

                    collapseBtn.classList.remove('hidden'); // Show Collapse button after loading
                })
                .catch(error => {
                    console.error('Error loading more products:', error);
                    loadMoreBtn.textContent = 'Load More';
                });
        });

        // Collapse Back to Initial Products
        collapseBtn.addEventListener('click', function() {
            const allProducts = [...document.querySelectorAll('.product-item')];

            // Remove all loaded products except the initial ones
            allProducts.forEach((product, index) => {
                if (index >= initialProducts.length) {
                    product.remove();
                }
            });

            collapseBtn.classList.add('hidden'); // Hide Collapse button
            loadMoreBtn.classList.remove('hidden'); // Show Load More button again
            loadMoreBtn.setAttribute('data-next-page', '2'); // Reset next page number
            loadMoreBtn.textContent = 'Load More'; // Reset button text
        });

        // Expand/Collapse Feature for Gallery Images
        document.querySelectorAll(".show-more-btn").forEach(button => {
            button.addEventListener("click", function() {
                let productId = this.getAttribute("data-product-id");
                let moreImagesContainer = document.querySelector(
                    `.extra-thumbnails[data-product-id='${productId}']`);
                let showMoreText = this.querySelector(".show-more-text");
                let toggleIcon = this.querySelector(".toggle-icon");

                if (moreImagesContainer) {
                    moreImagesContainer.classList.toggle("hidden");

                    if (!moreImagesContainer.classList.contains("hidden")) {
                        showMoreText.textContent = "Show Less";
                        toggleIcon.textContent = "−";
                    } else {
                        let remainingImages = moreImagesContainer.querySelectorAll("a").length;
                        showMoreText.textContent = `+ ${remainingImages} more`;
                        toggleIcon.textContent = "+";
                    }
                }
            });
        });
    });
</script>
