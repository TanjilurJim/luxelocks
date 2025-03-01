<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;
use App\Models\Category;
use App\Models\Product;

class ExtensionsController extends Controller
{
    public function extensions()
    {
        $pageTitle = 'Extensions';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'extensions')->first();

        // Fetch categories that have an image
        $categories = Category::whereNotNull('image')->get();

        // Fetch only published products that are showable in the product menu
        $products = Product::published()->shopPageProducts()->with('displayImage')->paginate(9);

        return view('Template::extensions', compact('pageTitle', 'sections', 'categories', 'products'));
    }

    // public function extensions_clip()
    // {
    //     $pageTitle = 'Extensions Clip';
    //     $sections = Page::where('tempname', activeTemplate())
    //                 ->where('slug', 'clip')
    //                 ->first() ?? new stdClass();

    //     return view('Template::extensions_clip', compact('pageTitle', 'sections'));

    // }

    // public function extensions_clip(Request $request)
    // {
    //     $pageTitle = 'Extensions Clip';

    //     // Fetch the section data for Clip-In page
    //     $sections = Page::where('tempname', activeTemplate())->where('slug', 'clip')->first() ?? new stdClass();

    //     // Step 1: Find the Clip-In Category
    //     $clipCategory = Category::where('name', 'Clip-In')->first();

    //     if (!$clipCategory) {
    //         return view('Template::extensions_clip', compact('pageTitle', 'sections'))->withErrors('Clip-In category not found.');
    //     }

    //     // Step 2: Retrieve all subcategories of Clip-In
    //     $categoryIds = $this->getSubcategoryIds($clipCategory->id);
    //     $categoryIds[] = $clipCategory->id; // Include Clip-In category itself

    //     // Step 3: Fetch products that belong to Clip-In or its subcategories
    //     $query = Product::published()
    //         ->shopPageProducts()
    //         ->whereHas('categories', function ($query) use ($categoryIds) {
    //             $query->whereIn('categories.id', $categoryIds);
    //         })
    //         ->with(['displayImage', 'galleryImages']);

    //     // Load only 9 products initially
    //     $products = $query->take(9)->get();

    //     // If AJAX request (Load More button clicked), return more products
    //     if ($request->ajax()) {
    //         $offset = $request->input('offset', 0);
    //         $moreProducts = $query->skip($offset)->take(9)->get();

    //         return response()->json([
    //             'products' => view('Template::partials.product_list', compact('moreProducts'))->render(),
    //             'offset' => $offset + 9, // Update offset for next batch
    //             'hasMore' => $query->skip($offset + 9)->exists(), // Check if more products exist
    //         ]);
    //     }

    //     return view('Template::extensions_clip', compact('pageTitle', 'sections', 'products'));
    // }

    public function extensions_clip()
    {
        $pageTitle = 'Extensions Clip';

        // Get the section data for the Clip-In page
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'clip')->first() ?? new stdClass();

        // Step 1: Find the Clip-In Category
        $clipCategory = Category::where('name', 'clip-in')->first();

        if (!$clipCategory) {
            return view('Template::extensions_clip', compact('pageTitle', 'sections'))->withErrors('Clip-In category not found.');
        }

        // Step 2: Retrieve all subcategories of Clip-In
        $categoryIds = $this->getSubcategoryIds($clipCategory->id);
        $categoryIds[] = $clipCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to Clip-In or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::extensions_clip', compact('pageTitle', 'sections', 'products'));
    }

    // Helper function to get subcategories recursively

    // public function extensions_fusion()
    // {
    //     $pageTitle = 'Extensions Fusion';
    //     $sections = Page::where('tempname', activeTemplate())->where('slug', 'fusion-hair-extensions')->first() ?? new stdClass();
    //     $products = Product::published()->shopPageProducts()->with('displayImage')->paginate(9);

    //     return view('Template::extensions_fusion', compact('pageTitle', 'sections','products'));
    // }

    public function extensions_fusion()
    {
        $pageTitle = 'Extensions Fusion';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'fusion-hair-extensions')->first() ?? new stdClass();

        // Step 1: Get the Fusion Category
        $fusionCategory = Category::where('name', 'Fusion')->first();

        if (!$fusionCategory) {
            return view('Template::extensions_fusion', compact('pageTitle', 'sections'))->withErrors('Fusion category not found.');
        }

        // Step 2: Retrieve all subcategories of Fusion
        $categoryIds = $this->getSubcategoryIds($fusionCategory->id);
        $categoryIds[] = $fusionCategory->id; // Include Fusion category itself

        // Step 3: Fetch products that belong to Fusion or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds); // ✅ Explicitly specify the table name
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::extensions_fusion', compact('pageTitle', 'sections', 'products'));
    }

    /**
     * Recursive function to get all subcategories of a given category
     */
    private function getSubcategoryIds($parentId)
    {
        $subcategories = Category::where('parent_id', $parentId)->pluck('id')->toArray();

        foreach ($subcategories as $subcategoryId) {
            $subcategories = array_merge($subcategories, $this->getSubcategoryIds($subcategoryId));
        }

        return $subcategories;
    }

    // public function extensions_sew()
    // {
    //     $pageTitle = 'Extensions Sew';
    //     $sections = Page::where('tempname', activeTemplate())->where('slug', 'weft')->first();
    //     return view('Template::extensions_sew', compact('pageTitle', 'sections'));
    // }
    public function extensions_sew()
    {
        $pageTitle = 'Extensions Sew';

        // Fetch the section data for the Weft Hair Extensions page
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'weft')->first() ?? new stdClass();

        // Step 1: Find the Weft Category
        $weftCategory = Category::where('name', 'weft')->first();

        if (!$weftCategory) {
            return view('Template::extensions_sew', compact('pageTitle', 'sections'))->withErrors('Weft category not found.');
        }

        // Step 2: Retrieve all subcategories of Weft
        $categoryIds = $this->getSubcategoryIds($weftCategory->id);
        $categoryIds[] = $weftCategory->id; // Include Weft category itself

        // Step 3: Fetch products that belong to Weft or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        // Debugging: Ensure $products is available
        if ($products->isEmpty()) {
            \Log::info("No products found for category 'Weft' and its subcategories.");
        }

        return view('Template::extensions_sew', compact('pageTitle', 'sections', 'products'));
    }

    /**
     * Recursive function to get all subcategories of a given category
     */

    public function extensions_tape()
    {
        $pageTitle = 'Extensions Tape';

        // Get the section data for the Tape-In page
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'tape-in')->first() ?? new stdClass();

        // Step 1: Find the Tape-In Category
        $tapeCategory = Category::where('name', 'Tape-In')->first();

        if (!$tapeCategory) {
            return view('Template::extensions_tape', compact('pageTitle', 'sections'))->withErrors('Tape-In category not found.');
        }

        // Step 2: Retrieve all subcategories of Tape-In
        $categoryIds = $this->getSubcategoryIds($tapeCategory->id);
        $categoryIds[] = $tapeCategory->id; // Include Tape-In category itself

        // Step 3: Fetch products that belong to Tape-In or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::extensions_tape', compact('pageTitle', 'sections', 'products'));
    }

    public function extensions_tools()
    {
        $pageTitle = 'Extensions Tools';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'tools-and-accessories')->first() ?? new stdClass();

        // Step 1: Find the Tape-In Category
        $toolsCategory = Category::where('name', 'Tools')->first();

        if (!$toolsCategory) {
            return view('Template::extensions_tools', compact('pageTitle', 'sections'))->withErrors('Tools-and-Accessories category not found.');
        }

        // Step 2: Retrieve all subcategories of Tape-In
        $categoryIds = $this->getSubcategoryIds($toolsCategory->id);
        $categoryIds[] = $toolsCategory->id; // Include tools category itself

        // Step 3: Fetch products that belong to Tools or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::extensions_tools', compact('pageTitle', 'sections','products'));
    }
}
