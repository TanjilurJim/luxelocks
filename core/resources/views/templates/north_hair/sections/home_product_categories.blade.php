@if ($categories->count())
    <!-- Product Categories -->
    <section class="max-w-screen-xl mx-auto px-4 md:py-12 sm:py-5 py-1 md:mt-10 mt-5">
        <h1 class="md:text-[30px] text-[24px] font-bold text-center md:mb-4 mb-2 md:leading-normal leading-tight">
            Manufacturer of Premium Hair Pieces for Men and Women
        </h1>
        <h2 class="lg:text-[40px] md:text-[28px] text-[24px] text-center mb-3">Product Categories</h2>

        <div class="grid md:grid-cols-4 grid-cols-2 gap-4" id="category-grid">
            @php
                $mensCategory = $categories->firstWhere('name', 'Mens');
                $womensCategory = $categories->firstWhere('name', 'women');
                $extensionsCategory = $categories->firstWhere('name', 'extensions');
                $suppliesCategory = $categories->firstWhere('name', 'Hair System Supplies');
            @endphp

            <!-- Men's Category -->
            @if ($mensCategory)
                <a href="{{ route('mens_hair_system') }}">
                    <img class="w-[280px] h-[280px]" src="{{ $mensCategory->categoryImage() }}" alt="Men’s Wigs & Hairpieces">
                    <p class="text-[20px] text-center mt-2">Hair Systems</p>
                </a>
            @endif

            <!-- Women's Category -->
            @if ($womensCategory)
                <a href="{{ route('women') }}">
                    <img class="w-[280px] h-[280px]" src="{{ $womensCategory->categoryImage() }}" alt="Women’s Wigs & Extensions">
                    <p class="text-[20px] text-center mt-2">Toppers & Wigs</p>
                </a>
            @endif

            <!-- Extensions Category -->
            @if ($extensionsCategory)
                <a href="{{ route('extensions') }}">
                    <img class="w-[280px] h-[280px]" src="{{ $extensionsCategory->categoryImage() }}" alt="Premium Hair Extensions">
                    <p class="text-[20px] text-center mt-2">Hair Extensions</p>
                </a>
            @endif

            <!-- Hair System Supplies Category -->
            @if ($suppliesCategory)
                <a href="{{ route('hair-system-supplies')}}">
                    <img class="w-[280px] h-[280px]" src="{{ $suppliesCategory->categoryImage() }}" alt="Hair System Supplies">
                    <p class="text-[20px] text-center mt-2">Supplies</p>
                </a>
            @endif
        </div>
    </section>
@endif
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryGrid = document.getElementById('category-grid');
        const loadMoreCategoriesBtn = document.getElementById('load-more-categories');
        const collapseCategoriesBtn = document.getElementById('collapse-categories');
        const initialCategories = [...document.querySelectorAll('#category-grid a')]; // Save initial state

        // Load More Categories
        loadMoreCategoriesBtn?.addEventListener('click', function() {
            let nextPage = this.getAttribute('data-next-page');
            loadMoreCategoriesBtn.textContent = 'Loading...';

            fetch(`?page=${nextPage}&categories=1`)
                .then(response => response.text())
                .then(data => {
                    let parser = new DOMParser();
                    let htmlDoc = parser.parseFromString(data, 'text/html');
                    let newCategoriesHTML = htmlDoc.querySelector('#category-grid').innerHTML;
                    let hasMorePages = htmlDoc.querySelector('#load-more-categories');

                    categoryGrid.insertAdjacentHTML('beforeend', newCategoriesHTML);

                    if (!hasMorePages) {
                        loadMoreCategoriesBtn.classList.add(
                            'hidden'); // Hide Load More button if no more pages
                    } else {
                        loadMoreCategoriesBtn.setAttribute('data-next-page', parseInt(nextPage) +
                            1);
                        loadMoreCategoriesBtn.textContent = 'Load More'; // Reset button text
                    }

                    collapseCategoriesBtn.classList.remove(
                        'hidden'); // Show "Show Less" button after loading
                })
                .catch(error => {
                    console.error('Error loading more categories:', error);
                    loadMoreCategoriesBtn.textContent = 'Load More';
                });
        });

        // Collapse Back to Initial Categories
        collapseCategoriesBtn.addEventListener('click', function() {
            const allCategories = [...document.querySelectorAll('#category-grid a')];

            // Remove all loaded categories except the initial ones
            allCategories.forEach((category, index) => {
                if (index >= initialCategories.length) {
                    category.remove();
                }
            });

            collapseCategoriesBtn.classList.add('hidden'); // Hide Collapse button
            loadMoreCategoriesBtn.classList.remove('hidden'); // Show Load More button again
            loadMoreCategoriesBtn.setAttribute('data-next-page', '2'); // Reset next page number
            loadMoreCategoriesBtn.textContent = 'Load More'; // Reset button text
        });
    });
</script>
