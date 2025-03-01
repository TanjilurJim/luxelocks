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

class SuppliesController extends Controller
{
    //

    private function getSubcategoryIds($parentId)
    {
        $subcategories = Category::where('parent_id', $parentId)->pluck('id')->toArray();

        foreach ($subcategories as $subcategoryId) {
            $subcategories = array_merge($subcategories, $this->getSubcategoryIds($subcategoryId));
        }

        return $subcategories;
    }

    public function supplies()
    {
        $pageTitle = 'Supplies';
        $sections  = Page::where('tempname', activeTemplate())
            ->where('slug', 'hair-system-supplies')
            ->first();

        $suppliesCategory = Category::where('name', 'Hair System Supplies')->first();
        $suppliesIds = $this->getSubcategoryIds($suppliesCategory->id);
        $suppliesIds[] = $suppliesCategory->id;

        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($q) use ($suppliesIds) {
                $q->whereIn('categories.id', $suppliesIds);
            })
            // ->whereNotNull('sale_price') // Only products that have a sale_price
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::supplies', compact('pageTitle', 'sections', 'products'));
    }


}
