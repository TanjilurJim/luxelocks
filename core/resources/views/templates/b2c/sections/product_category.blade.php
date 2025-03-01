@php
    $categories = \App\Models\Category::featured()->orderBy('id', 'desc')->get();
@endphp
<div class="categories-section appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                        <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer" data-owl-options="{
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '480': {
                                    'items': 3
                                },
                                '576': {
                                    'items': 4
                                },
                                '768': {
                                    'items': 5
                                },
                                '992': {
                                    'items': 7
                                },
                                '1200': {
                                    'items': 8
                                }
                            }
                        }">

                            @foreach($categories as $category)
                                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ $category->categoryImage() }}" alt="category" width="280" height="240" />
                                        </figure>
                                        <div class="category-content">
                                            <h3>{{ $category->name }}</h3>
                                            <span>
                                                @if($category->products->isNotEmpty())
                                                    <mark class="count">{{ $category->products->count() }}</mark> products
                                                @else
                                                    <mark class="count">0</mark> products
                                                @endif
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>