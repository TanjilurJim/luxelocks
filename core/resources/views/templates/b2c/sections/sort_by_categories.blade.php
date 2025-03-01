@php
    $categories = \App\Models\Category::orderBy('id', 'desc')->get();
@endphp
<div class="category-filter-section bg-gray appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-3 pr-lg-3 pr-sm-0 col-sm-6 order-1 order-sm-0">
                            <div class="shop-list h-100">
                                <h4>Sort By</h4>

                                <ul class="nav nav-tabs flex-sm-column border-0" role="tablist">
                                    @foreach ($categories as $key => $category)
                                        <li class="nav-item">
                                            <a class="nav-link {{ $key === 0 ? 'active' : '' }}" 
                                            id="filter-{{ $category->id }}-tab" 
                                            data-toggle="tab" 
                                            href="#filter-{{ $category->id }}" 
                                            role="tab" 
                                            aria-controls="filter-{{ $category->id }}" 
                                            aria-selected="{{ $key === 0 ? 'true' : 'false' }}">
                                            {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach

                                    
                                </ul>

                                <a class="view-all" href="{{ route('product.all') }}">View
                                    All<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>

                        @php
                            $content = getContent('sort_by_banner.content', true);

                            // dd($dataValues);
                                                
                        @endphp
                        @if ($content)
                        @php
                                $dataValues = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
                        @endphp
                        <div class="col-lg-3 col-sm-6 pl-lg-3 pl-sm-0 order-0">
                           
                            <div class="banner banner3" style="background-image: url({{ $dataValues->sort_by_banner 
                                        ? asset('assets/images/frontend/sort_by_banner/' . $dataValues->sort_by_banner) 
                                        : asset('assets/b2c/assets/img/banner/banner3.png') }});">
                                <div class="container d-flex justify-content-center">
                                    <div class="banner-layer text-center">
                                        <h4 class="font1"><i class="font2">{{ $dataValues->top_title }}</i>
                                        </h4>

                                        <h3 class="text-dark mb-0">{{ $dataValues->title }}</h3>
                                        <h2 class="text-dark">{{ $dataValues->percentage }}% OFF</h2>
                                        <h5 class="coupon-sale-text justify-content-end">
                                            <span class="text-dark">STARTING AT</span>
                                            <b class="text-white align-middle"><sup> ৳</sup><em
                                                    class="align-text-top">{{ $dataValues->starting_price }}</em><sup>99</sup></b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        
                        <div class="col-lg-6 tab-content mt-2 mt-lg-0 order-2 order-sm-0">
                            @foreach ($categories as $key => $category)
                                <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" 
                                    id="filter-{{ $category->id }}" 
                                    role="tabpanel" 
                                    aria-labelledby="filter-{{ $category->id }}-tab">
                                    <div class="product-content products-with-divide">
                                        <div class="row row-joined h-100">
                                            {{-- @forelse ($category->products as $product)
                                                <div class="col-sm-4 col-6">
                                                    <div class="product-default inner-quickview inner-icon">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="{{ $product->mainImage }}" width="239" height="239" alt="{{ $product->name }}">
                                                            </a>
                                                            <div class="btn-icon-group">
                                                                <a href="#" class="btn-icon btn-add-cart product-type-simple">
                                                                    <i class="icon-shopping-cart"></i>
                                                                </a>
                                                            </div>
                                                            <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <div class="category-wrap">
                                                                <div class="category-list">
                                                                    <a href="#" class="product-category">{{ $category->name }}</a>
                                                                </div>
                                                                <a href="#" class="btn-icon-wish">
                                                                    <i class="icon-heart"></i>
                                                                </a>
                                                            </div>
                                                            <h3 class="product-title">
                                                                <a href="#">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="ratings-container">
                                                                <div class="product-ratings">
                                                                    <span class="ratings" style="width:{{ $product->rating }}%"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="old-price">৳{{ $product->old_price }}</span>
                                                                <span class="product-price">৳{{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12">
                                                    <p>No products available for this category.</p>
                                                </div>
                                            @endforelse --}}
                                            @forelse ($category->products as $product)
                                                <div class="col-sm-4 col-6">
                                                    <div class="product-default inner-quickview inner-icon">
                                                        <figure>
                                                            <!-- Product Image -->
                                                            <a href="{{ $product->link() }}">
                                                                <img src="{{ $product->mainImage(false) }}" 
                                                                    width="239" 
                                                                    height="239" 
                                                                    alt="{{ $product->name }}">
                                                            </a>
                                                            <div class="btn-icon-group">
                                                                <a href="#" class="btn-icon btn-add-cart product-type-simple">
                                                                    <i class="icon-shopping-cart"></i>
                                                                </a>
                                                            </div>
                                                            <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <div class="category-wrap">
                                                                <div class="category-list">
                                                                    <!-- Display categories associated with the product -->
                                                                    @foreach ($product->categories as $category)
                                                                        <a href="" class="product-category">
                                                                            {{ $category->name }}
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                                <a href="#" class="btn-icon-wish">
                                                                    <i class="icon-heart"></i>
                                                                </a>
                                                            </div>
                                                            <h3 class="product-title">
                                                                <a href="{{ $product->link() }}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="ratings-container">
                                                                <div class="product-ratings">
                                                                    <!-- Ratings percentage -->
                                                                    <span class="ratings" style="width:{{ $product->avg_rating * 20 }}%"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <div class="price-box">
                                                                <!-- Display prices -->
                                                                @if ($product->sale_price)
                                                                    <span class="old-price">৳{{ number_format($product->regular_price, 2) }}</span>
                                                                    <span class="product-price">৳{{ number_format($product->sale_price, 2) }}</span>
                                                                @else
                                                                    <span class="product-price">৳{{ number_format($product->regular_price, 2) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <!-- Fallback if no products are found -->
                                                <p>No products available in this category.</p>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            
                        </div>
                        

                    </div>
                </div>
            </div>