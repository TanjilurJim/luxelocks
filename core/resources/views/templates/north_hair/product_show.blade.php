@extends('Template::layouts.master')

@section('content')
    @php
        // dd($product->mainImage(false));
    @endphp
    <main class="main">
        <!-- Breadcrumb -->
        <section
            class="max-w-screen-xl mx-auto px-4 py-3 flex md:flex-row flex-col md:items-center items-start md:gap-2 gap-0">
            <div class="flex items-center gap-2 md:text-[16px] text-[14px]">
                <a class="text-[#306AED] hover:text-[#F9D161] transition-all duration-300" href="{{ route('home') }}">Home</a>
                »
                <a class="text-[#306AED] hover:text-[#F9D161] transition-all duration-300" href="#">Products</a>
                »
            </div>
            <p class="leading-tight md:text-[16px] text-[14px] text-[#444444]">{{ $product->name }}</p>

        </section>

        <!-- Main Product Section -->
        <section class="max-w-screen-xl mx-auto px-4 mt-5 grid lg:grid-cols-11 grid-cols-1 lg:gap-5 gap-0">
            <!-- Product Images -->
            <!-- Main Images Column -->
            <div class="col-span-5">
                <!-- 1) Main Image -->
                <div class="slick-slider mb-3">
                    <div
                        class="relative w-full max-w-[500px] h-[500px] mx-auto
          flex items-center justify-center overflow-hidden">
                        <img id="mainProductImage" src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- 2) Thumbnails Below -->
                <div id="imageButtonContainer">
                    @if (!empty($product->galleryImages) && is_iterable($product->galleryImages))
                        <div class="flex flex-wrap gap-2">
                            @foreach ($product->galleryImages as $image)
                                <button type="button"
                                    class="gallery-thumb-button border relative group focus:border-black flex justify-center"
                                    data-full-url="{{ $image->full_url }}">
                                    <img src="{{ $image->full_url }}" alt="Thumb {{ $loop->index + 1 }}"
                                        class="h-16 w-16 border transition duration-300 group-hover:border-black">
                                    <div class="absolute z-10 hidden group-hover:block
                                   bottom-20 left-1/2 transform -translate-x-1/2
                                   w-32 h-32 bg-cover bg-center border shadow-lg"
                                        style="background-image: url('{{ $image->full_url }}');">
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No images available</p>
                    @endif
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-span-6 flex flex-col gap-4">
                <h1 class="font-bold text-[24px]">{{ $product->name }}</h1>
                @if ($product->sku)
                    <p class="text-sm text-[#909294]">
                        SKU: <span class="text-black font-medium">{{ $product->sku }}</span>
                    </p>
                @endif

                <!-- Include FontAwesome (if not already included) -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

                <div class="flex items-center gap-2">
                    @if ($product->reviews_count > 0)
                        @php
                            $averageRating = $product->reviews_avg_rating;
                        @endphp

                        <!-- ⭐ Star Display (Supports Half Stars) -->
                        <div class="flex items-center gap-1">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($averageRating))
                                    <i class="fa-solid fa-star text-yellow-400 text-lg"></i>
                                @elseif ($i == ceil($averageRating) && $averageRating - floor($averageRating) >= 0.5)
                                    <i class="fa-solid fa-star-half-alt text-yellow-400 text-lg"></i>
                                @else
                                    <i class="fa-regular fa-star text-gray-300 text-lg"></i>
                                @endif
                            @endfor
                        </div>

                        <!-- ⭐ Numeric Rating & Reviews Count -->
                        <p class="text-sm text-gray-700">
                            <strong>{{ round($averageRating, 1) }}/5</strong>
                            (<a href="#reviews-section" class="text-blue-500 underline">
                                {{ $product->reviews_count }} customer reviews
                            </a>)
                        </p>
                    @else
                        <span class="text-gray-500">No reviews yet.</span>
                    @endif
                </div>

                <!-- NEW: SKU + Price + Stock Info -->
                <div class="mt-2">
                    Get a sample: we have special preferential prices for the first test sheet of wholesale customers.
                    <!-- SKU (small text, subtle) -->


                    <!-- Pricing (highlight sale price if present) -->
                    @if (Auth::check())
                        @if ($product->sale_price)
                            <p class="text-[20px] font-bold text-red-500 mt-1">Main Product Price:
                                ${{ number_format($product->sale_price, 2) }}
                                <span class="line-through text-[#444444] text-[16px] ml-2">
                                    <s>${{ number_format($product->regular_price, 2) }}</s>
                                </span>
                            </p>
                        @else
                            <p class="text-[20px] font-bold text-[#444444] mt-1">Main Product Price:
                                ${{ number_format($product->regular_price, 2) }}
                            </p>
                        @endif
                    @endif

                    <!-- Stock Status -->
                    <p class="text-sm mt-1">
                        @if ($product->in_stock > 0)
                            <span class="text-green-600 font-medium"><strong>
                                    In Stock: {{ $product->in_stock }} </strong>
                            </span>
                        @else
                            {{-- <span class="text-red-600 font-medium"><strong> Currently
                                    Out of Stock</strong>
                            </span> --}}
                        @endif
                    </p>
                </div>



                <!-- Wrap your size/color/quantity in a form -->
                <div>
                    @csrf

                    <!-- Base Size Selection -->
                    <p class="mt-4 font-semibold">Base Size: <span id="selectionSize" class="text-[#909294]">No
                            selection</span></p>
                    <div class="flex gap-2">
                        @if ($baseSizes->isNotEmpty())
                        
                            @foreach ($baseSizes as $size)
                                <button type="button" class="size-button text-[#666666] border px-[10px] py-[5px] rounded">
                                    {{ $size }}
                                </button>
                            @endforeach
                        @else
                            <p class="text-gray-500">No sizes available</p>
                        @endif
                    </div>

                    <!-- VariaNTS Section (Only if the product is variable and has variants) -->
                    @if ($product->product_type == \App\Constants\Status::PRODUCT_TYPE_VARIABLE && $product->productVariants->count())
                        <div class="mt-5" id="variantSection">
                            <h2 class="text-lg font-semibold mb-2">Available Variants</h2>

                            <div class="flex flex-wrap gap-3" id="variantButtonContainer">
                                @foreach ($product->productVariants as $variant)
                                    @php
                                        $variantLabel = 'Variant #' . ($loop->index + 1);
                                    @endphp

                                    <button type="button" class="variant-button border p-2 rounded hover:border-blue-400"
                                        style="width: 100px;" data-variant-id="{{ $variant->id }}"
                                        data-variant-image="{{ $variant->mainImage(false) }}"
                                        @if (Auth::check()) data-variant-regular-price="{{ $variant->regular_price }}"
                                        data-variant-sale-price="{{ $variant->sale_price }}" @endif>
                                        <img src="{{ $variant->mainImage(false) }}" alt="{{ $variantLabel }}"
                                            class="w-full h-16 object-cover">
                                        @if (Auth::check())
                                            @if ($variant->sale_price)
                                                <div class="text-red-500 text-sm mt-1">
                                                    ${{ number_format($variant->sale_price, 2) }}
                                                </div>
                                                <div class="line-through text-gray-400 text-xs">
                                                    <s>${{ number_format($variant->regular_price, 2) }}</s>
                                                </div>
                                            @else
                                                <div class="text-gray-700 text-sm mt-1">
                                                    ${{ number_format($variant->regular_price, 2) }}
                                                </div>
                                            @endif
                                        @endif
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Price Display -->
                    <div class="mt-2">
                        @if (Auth::check())
                            <p id="priceDisplay" class="text-[20px] font-bold mt-1">
                                @if ($product->sale_price)
                                    <span class="text-red-500">
                                        ${{ number_format($product->sale_price, 2) }}
                                    </span>
                                    <span class="line-through text-[#444444] text-[16px] ml-2">
                                        <s>${{ number_format($product->regular_price, 2) }}</s>
                                    </span>
                                @else
                                    <span class="text-[#444444]">
                                        ${{ number_format($product->regular_price, 2) }}
                                    </span>
                                @endif
                        @endif
                        </p>
                    </div>

                    <!-- Quantity & Add to Cart -->
                    <form method="post" action="{{ route('product.cart.store') }}" class="flex items-center mt-4">
                        @csrf
                        <input type="hidden" id="variant_id" name="variant_id">
                        <input type="hidden" id="product_id" value="{{ $product->id }}" name="product_id">

                        <input type="hidden" id="base_size_field" name="base_size" value="" />

                        <div class="flex items-center space-x-4">
                            <div class="flex items-center border rounded-md overflow-hidden">
                                <button type="button" id="decrement"
                                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300">-</button>
                                <input id="quantity" name="quantity" type="text" value="1"
                                    class="w-12 text-center border-l border-r focus:outline-none" readonly>
                                <button type="button" id="increment"
                                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300">+</button>
                            </div>

                            <button id="addToQuote" type="submit"
                                class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 opacity-50 cursor-not-allowed"
                                disabled>
                                Add to Cart
                            </button>
                        </div>
                    </form>
                </div>

                <!-- End form -->

                <!-- Specifications -->
                <!-- Specifications -->
                <div>
                    {{-- <p><strong>Summary:</strong> {{ $product->summary }}</p> --}}
                    <button id="toggleButton" class="border-y w-full py-3 mt-5">Specifications</button>
                    <div id="content" class="flex flex-col gap-4 mb-4 border-b pb-5">
                        @if (!empty($product->summary))
                            <ul class="list-disc pl-5">
                                <p><strong></strong> {!! $product->summary !!}</p>
                            </ul>
                        @else
                            <p>No specifications available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- Description / Reviews / Policy -->
        <section class="max-w-screen-xl mx-auto px-4 py-10">
            <div class="flex items-center gap-5 border-b">
                <button id="description-btn"
                    class="text-[#306AED] border-t-[3px] border-[#306AED] font-bold py-1">Description</button>
                <button id="reviews-btn"
                    class="text-[#515151] border-t-[3px] border-transparent font-bold py-1">Reviews</button>
                <button id="policy-btn"
                    class="text-[#515151] border-t-[3px] border-transparent font-bold py-1">Policy</button>
            </div>

            <div id="description-section" class="mt-5">{!! $product->description !!}</div>
            <!-- FontAwesome (for better star icons) -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

            <div id="reviews-section" class="mt-5 hidden">
                @if ($product->reviews->count() > 0)
                    <h3 class="text-[22px] font-bold mb-4">Customer Reviews</h3>

                    @foreach ($product->reviews as $review)
                        <div class="border p-4 mb-4 rounded-lg shadow-sm bg-white">
                            <p class="font-bold text-gray-800">{{ $review->user->firstname }}</p>

                            <!-- ⭐ Star Rating (Supports Half Stars) -->
                            <div class="flex items-center my-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= floor($review->rating))
                                        <i class="fa-solid fa-star text-yellow-400 text-lg"></i>
                                    @elseif ($i == ceil($review->rating) && $review->rating - floor($review->rating) >= 0.5)
                                        <i class="fa-solid fa-star-half-alt text-yellow-400 text-lg"></i>
                                    @else
                                        <i class="fa-regular fa-star text-gray-300 text-lg"></i>
                                    @endif
                                @endfor
                            </div>

                            <p class="text-gray-700">{{ $review->review }}</p>
                            <small class="text-gray-500">{{ $review->created_at->format('M d, Y') }}</small>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500">No reviews yet. Be the first to review this product!</p>
                @endif

                <!-- Review Form -->
                @auth
                    <form method="POST" action="{{ route('review.store', $product->id) }}"
                        class="border p-5 rounded-lg shadow-sm bg-white">
                        @csrf
                        <h3 class="text-[22px] font-bold mb-3">Write a Review</h3>

                        <label class="text-[18px] font-semibold">Your Rating *</label>
                        <div class="flex items-center space-x-2 my-2 review-stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-regular fa-star text-gray-400 text-2xl cursor-pointer hover:text-yellow-400"
                                    data-value="{{ $i }}"></i>
                            @endfor
                        </div>
                        <input type="hidden" name="rating" id="ratingValue">

                        <label class="text-[18px] font-semibold" for="review">Your Review *</label>
                        <textarea class="border py-3 px-3 w-full rounded" id="review" name="review" required></textarea>

                        <input type="submit" value="Submit"
                            class="mt-3 w-full border border-[#306AED] bg-[#306AED] text-white font-semibold px-[30px] py-[10px] rounded cursor-pointer">
                    </form>
                @else
                    <p class="text-red-500">Please <a href="{{ route('login') }}" class="text-blue-500 underline">log in</a>
                        to leave a review.</p>
                @endauth
            </div>

            <div id="policy-section" class="mt-5 hidden">
                <p>Return policy goes here...</p>
            </div>
        </section>

        <!-- Related Products -->
        <div>
            @if ($relatedProducts->isNotEmpty())
                <section class="max-w-screen-xl mx-auto px-4 mt-5 mb-10">
                    <h1 class="font-bold text-[24px]">Related Products</h1>
                    <div class="grid md:grid-cols-4 grid-cols-2 gap-5">

                        @foreach ($relatedProducts->take(4) as $related)
                            <div class="group relative">
                                <a href="{{ url('/product/' . $related->slug) }}">
                                    <img src="{{ $related->mainImage(false) }}" alt="{{ $related->name }}"
                                        class="w-full">
                                    <p class="text-[18px] mb-3 mx-5 mt-3">
                                        <span class="font-bold">{{ $related->sku ?? 'SKU:' }} :</span>
                                        <strong>{{ $related->name }}</strong>
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        </div>
    </main>

    <!-- JS for Interactive Star Selection -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll(".review-stars .fa-star");
            const ratingInput = document.getElementById("ratingValue");

            stars.forEach((star, index) => {
                star.addEventListener("mouseover", function() {
                    highlightStars(index);
                });

                star.addEventListener("click", function() {
                    ratingInput.value = index + 1; // ✅ Set the hidden input value
                    setPermanentStars(index);
                });

                star.addEventListener("mouseleave", function() {
                    resetStars(ratingInput.value);
                });
            });

            function highlightStars(index) {
                stars.forEach((star, i) => {
                    star.classList.toggle("fa-solid", i <= index);
                    star.classList.toggle("fa-regular", i > index);
                    star.classList.toggle("text-yellow-400", i <= index);
                    star.classList.toggle("text-gray-400", i > index);
                });
            }

            function setPermanentStars(index) {
                stars.forEach((star, i) => {
                    star.classList.toggle("fa-solid", i <= index);
                    star.classList.toggle("fa-regular", i > index);
                    star.classList.toggle("text-yellow-400", i <= index);
                    star.classList.toggle("text-gray-400", i > index);
                });
            }

            function resetStars(selectedRating) {
                stars.forEach((star, i) => {
                    star.classList.toggle("fa-solid", i < selectedRating);
                    star.classList.toggle("fa-regular", i >= selectedRating);
                    star.classList.toggle("text-yellow-400", i < selectedRating);
                    star.classList.toggle("text-gray-400", i >= selectedRating);
                });
            }
        });
    </script>

    {{-- SINGLE SCRIPT BLOCK AT THE BOTTOM --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            /* ===========================
             * 1. Base Size Selection
             * =========================== */
            const sizeButtons = document.querySelectorAll(".size-button");
            const selectionSizeText = document.getElementById("selectionSize");
            const baseSizeField = document.getElementById("base_size_field"); // the hidden input
            let selectedSize = null;

            sizeButtons.forEach(button => {
                button.addEventListener("click", function() {
                    selectedSize = this.textContent.trim(); // e.g. "22"
                    selectionSizeText.textContent = selectedSize;
                    selectionSizeText.style.color = "black";

                    // Insert into hidden input for form submission
                    baseSizeField.value = selectedSize;

                    // Style update (deselect other buttons, highlight this)
                    sizeButtons.forEach(btn => {
                        btn.style.backgroundColor = "";
                        btn.style.color = "#666666";
                    });
                    this.style.backgroundColor = "black";
                    this.style.color = "white";

                    // Possibly re-check if we can enable the Add to Cart
                    updateButtonState();
                });
            });

            /* ===========================
             * 2. Variant Selection
             * =========================== */
            const variantButtons = document.querySelectorAll(".variant-button");
            let selectedVariant = null;
            let hasVariants = variantButtons.length > 0;

            if (hasVariants) {
                variantButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        selectedVariant = this.getAttribute("data-variant-id");
                        document.getElementById("variant_id").value = selectedVariant;

                        variantButtons.forEach(btn => btn.style.borderColor = "");
                        this.style.borderColor = "black";

                        updateButtonState();
                    });
                });
            }

            /* ===========================
             * 3. Color Selection (Hair Color)
             * =========================== */
            const container = document.getElementById('imageButtonContainer');
            const selectionText = document.getElementById('selectionColor');

            if (container) {
                container.addEventListener("click", function(event) {
                    const target = event.target.closest(".color-option");
                    if (!target) return;

                    const colorName = target.getAttribute("data-color-name") || "No selection";
                    selectionText.textContent = colorName;
                    selectionText.style.color = "black";

                    updateButtonState();
                });
            }

            /* ===========================
             * 4. Enable/Disable Add to Cart Button
             * =========================== */
            const addToCartButton = document.getElementById("addToQuote");

            function updateButtonState() {
                if ((hasVariants && selectedSize && selectedVariant) || (!hasVariants && selectedSize)) {
                    addToCartButton.disabled = false;
                    addToCartButton.classList.remove("opacity-50", "cursor-not-allowed");
                } else {
                    addToCartButton.disabled = true;
                    addToCartButton.classList.add("opacity-50", "cursor-not-allowed");
                }
            }
            updateButtonState();

            /* ===========================
             * 5. Quantity Increment & Decrement
             * =========================== */
            const decrementButton = document.getElementById('decrement');
            const incrementButton = document.getElementById('increment');
            const quantityInput = document.getElementById('quantity');

            if (decrementButton && incrementButton && quantityInput) {
                decrementButton.addEventListener('click', () => {
                    let currentValue = parseInt(quantityInput.value, 10);
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                    }
                });

                incrementButton.addEventListener('click', () => {
                    let currentValue = parseInt(quantityInput.value, 10);
                    quantityInput.value = currentValue + 1;
                });
            }

            /* ===========================
             * 6. Tab Navigation (Description / Reviews / Policy)
             * =========================== */
            const descriptionBtn = document.getElementById('description-btn');
            const reviewsBtn = document.getElementById('reviews-btn');
            const policyBtn = document.getElementById('policy-btn');

            const descriptionSection = document.getElementById('description-section');
            const reviewsSection = document.getElementById('reviews-section');
            const policySection = document.getElementById('policy-section');

            function showSection(sectionToShow, activeBtn) {
                descriptionSection.classList.add('hidden');
                reviewsSection.classList.add('hidden');
                policySection.classList.add('hidden');
                sectionToShow.classList.remove('hidden');

                [descriptionBtn, reviewsBtn, policyBtn].forEach(btn => {
                    btn.classList.remove('text-[#306AED]', 'border-[#306AED]');
                    btn.classList.add('text-[#515151]', 'border-transparent');
                });

                activeBtn.classList.remove('text-[#515151]', 'border-transparent');
                activeBtn.classList.add('text-[#306AED]', 'border-[#306AED]');
            }

            descriptionBtn.addEventListener('click', () => showSection(descriptionSection, descriptionBtn));
            reviewsBtn.addEventListener('click', () => showSection(reviewsSection, reviewsBtn));
            policyBtn.addEventListener('click', () => showSection(policySection, policyBtn));

            showSection(descriptionSection, descriptionBtn);

            /* ===========================
             * 7. Main Product Image Update from Thumbnails
             * =========================== */
            const mainImageEl = document.getElementById('mainProductImage');
            const galleryThumbs = document.querySelectorAll('.gallery-thumb-button');

            galleryThumbs.forEach(btn => {
                btn.addEventListener('click', () => {
                    const fullUrl = btn.dataset.fullUrl;
                    if (mainImageEl && fullUrl) {
                        mainImageEl.src = fullUrl;
                    }
                });
            });

            /* ===========================
             * 8. Change Price Based on Variant Selection
             * =========================== */
            const priceDisplayEl = document.getElementById('priceDisplay');

            variantButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const variantImage = button.dataset.variantImage;
                    const regularPrice = parseFloat(button.dataset.variantRegularPrice || 0);
                    const salePrice = parseFloat(button.dataset.variantSalePrice || 0);
                    document.getElementById('variant_id').value = button.dataset.variantId;

                    if (variantImage && mainImageEl) {
                        mainImageEl.src = variantImage;
                    }

                    if (priceDisplayEl) {
                        if (salePrice > 0) {
                            priceDisplayEl.innerHTML = `
                                <span class="text-red-500">
                                    $${salePrice.toFixed(2)}
                                </span>
                                <span class="line-through text-[#444444] text-[16px] ml-2">
                                    <s>$${regularPrice.toFixed(2)}</s>
                                </span>
                            `;
                        } else {
                            priceDisplayEl.innerHTML = `
                                <span class="text-[#444444]">
                                    $${regularPrice.toFixed(2)}
                                </span>
                            `;
                        }
                    }
                });
            });
        });
    </script>


@endsection
