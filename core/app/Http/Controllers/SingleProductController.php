<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    //
    public function show($slug)
    {
        // Fetch the main category using the slug
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            abort(404, 'Category not found.');
        }

        // Fetch products directly under the main category
        $categoryProducts = Product::published()
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('categories.id', $category->id);
            })
            ->with(['displayImage', 'galleryImages'])
            ->get();

        // Fetch subcategories of the main category
        $subcategories = Category::where('parent_id', $category->id)->get();

        // Fetch products under each subcategory
        $subcategoryProducts = [];
        foreach ($subcategories as $subcategory) {
            $products = Product::published()
                ->whereHas('categories', function ($query) use ($subcategory) {
                    $query->where('categories.id', $subcategory->id);
                })
                ->with(['displayImage', 'galleryImages'])
                ->get();

            $subcategoryProducts[$subcategory->id] = $products;
        }

        // Pass all data to the view
        return view('Template::category_details', compact('category', 'categoryProducts', 'subcategories', 'subcategoryProducts'));
    }
}
