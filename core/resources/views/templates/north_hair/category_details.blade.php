<!-- resources/views/Template/category_details.blade.php -->

@extends('Template::layouts.master')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-12">

    <!-- Main Category Details -->
    <h1 class="text-4xl font-bold text-center mb-8">{{ $category->name }}</h1>

    @if($category->description)
        <p class="text-center text-lg mb-6">{{ $category->description }}</p>
    @endif

    @if($category->image)
        <div class="flex justify-center mb-8">
            <img src="{{ $category->categoryImage() }}" alt="{{ $category->name }}" class="rounded-lg shadow-lg w-1/2">
        </div>
    @endif

    <!-- Products Directly Under the Main Category -->
    @if($categoryProducts->isNotEmpty())
        <h2 class="text-2xl font-semibold mb-4">Products in {{ $category->name }}</h2>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-6 mb-12">
            @foreach($categoryProducts as $product)
                <div class="border rounded-lg p-4 shadow-md group relative">
                    <!-- Main Image -->
                    <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                         class="w-full h-64 object-cover transition-opacity duration-300 group-hover:opacity-0">

                    <!-- Hover Image (First Gallery Image) -->
                    @if ($product->galleryImages->count() > 0)
                        <img src="{{ $product->galleryImages->first()->full_url }}" alt="{{ $product->name }}"
                             class="w-full h-64 object-cover absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    @endif

                    <!-- Product Details -->
                    <h3 class="text-xl font-semibold mt-4">{{ $product->name }}</h3>
                    <p class="text-lg text-gray-700">${{ $product->price }}</p>
                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="text-blue-500 mt-2 inline-block">View Product</a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-lg text-gray-600 mb-12">No products directly under this category.</p>
    @endif

    <!-- Subcategories and Their Products -->
    @if($subcategories->isNotEmpty())
        <h2 class="text-2xl font-semibold mb-6">Subcategories</h2>

        @foreach($subcategories as $subcategory)
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4">{{ $subcategory->name }}</h3>

                @if($subcategoryProducts[$subcategory->id]->isNotEmpty())
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        @foreach($subcategoryProducts[$subcategory->id] as $product)
                            <div class="border rounded-lg p-4 shadow-md group relative">
                                <!-- Main Image -->
                                <img src="{{ $product->mainImage(false) }}" alt="{{ $product->name }}"
                                     class="w-full h-64 object-cover transition-opacity duration-300 group-hover:opacity-0">

                                <!-- Hover Image (First Gallery Image) -->
                                @if ($product->galleryImages->count() > 0)
                                    <img src="{{ $product->galleryImages->first()->full_url }}" alt="{{ $product->name }}"
                                         class="w-full h-64 object-cover absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                @endif

                                <!-- Product Details -->
                                <h4 class="text-lg font-semibold mt-4">{{ $product->name }}</h4>
                                <p class="text-gray-700">${{ $product->price }}</p>
                                <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="text-blue-500 mt-2 inline-block">View Product</a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600">No products found in this subcategory.</p>
                @endif
            </div>
        @endforeach
    @else
        <p class="text-lg text-gray-600">No subcategories available for this category.</p>
    @endif

</div>
@endsection
