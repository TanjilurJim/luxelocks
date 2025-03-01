<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constants\Status;
use Carbon\Carbon;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;
use App\Models\Category;
use App\Models\Product;

class ClearanceController extends Controller
{

    private function getSubcategoryIds($parentId)
    {
        $subcategories = Category::where('parent_id', $parentId)->pluck('id')->toArray();

        foreach ($subcategories as $subcategoryId) {
            $subcategories = array_merge($subcategories, $this->getSubcategoryIds($subcategoryId));
        }

        return $subcategories;
    }


    public function clearance()
    {
        $pageTitle = 'Clearance';
        $sections  = Page::where('tempname', activeTemplate())
            ->where('slug', 'clearance-hair-system')
            ->first();

        // Product1 logic
        $extensionsCategory = Category::where('name', 'Hair Systems')->first();
        $extensionIds = $this->getSubcategoryIds($extensionsCategory->id);
        $extensionIds[] = $extensionsCategory->id;

        $products1 = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', fn($q) => $q->whereIn('categories.id', $extensionIds))
            ->whereNotNull('sale_price')           // Only include products with a non-null sale_price
            // ->where('sale_price', '>', 0)       // Uncomment if you also want sale_price to be greater than zero
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9, ['*'], 'product1Page');  // Specify a custom page name for pagination

        // Product2 logic
        $customCategory = Category::where('name', 'custom')->first();
        $customIds = $this->getSubcategoryIds($customCategory->id);
        $customIds[] = $customCategory->id;

        $products2 = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', fn($q) => $q->whereIn('categories.id', $customIds))
            ->whereNotNull('sale_price')   
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9, ['*'], 'product2Page');

        return view('Template::clearance_systems', compact('pageTitle', 'sections', 'products1', 'products2'));
    }
    public function clearance_extension()
    {
        $pageTitle = 'Clearance Extensions';
        $sections  = Page::where('tempname', activeTemplate())
            ->where('slug', 'clearance-hair-extension')
            ->first();

        $extensionsCategory = Category::where('name', 'extensions')->first();
        $extensionIds = $this->getSubcategoryIds($extensionsCategory->id);
        $extensionIds[] = $extensionsCategory->id;

        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($q) use ($extensionIds) {
                $q->whereIn('categories.id', $extensionIds);
            })
            ->whereNotNull('sale_price') // Only products that have a sale_price
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::clearance_extensions', compact('pageTitle', 'sections', 'products'));
    }
}
