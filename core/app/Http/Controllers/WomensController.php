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

class WomensController extends Controller
{
    public function women_page()
    {
        $pageTitle = 'Women';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women')->first();

        // Step 1: Find Women Category
        $womenCategory = Category::where('name', 'women')->first();

        if (!$womenCategory) {
            return view('Template::women', compact('pageTitle', 'sections'))->withErrors('Women category not found.');
        }

        // Step 2: Retrieve all subcategories of Women
        $subcategoryIds = $this->getSubcategoryIds($womenCategory->id);
        $subcategoryIds[] = $womenCategory->id; // Include Women category itself

        // Step 3: Fetch products that belong to Women or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($subcategoryIds) {
                $query->whereIn('categories.id', $subcategoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        // Step 4: Fetch product categories (subcategories of Women)
        $product_categories = Category::where('parent_id', $womenCategory->id)->featured()->orderBy('name', 'asc')->get();

        // Return view with products and categories
        return view('Template::women', compact('pageTitle', 'sections', 'products', 'product_categories'));
    }

    private function getSubcategoryIds($parentId)
    {
        $subcategories = Category::where('parent_id', $parentId)->pluck('id')->toArray();

        foreach ($subcategories as $subcategoryId) {
            $subcategories = array_merge($subcategories, $this->getSubcategoryIds($subcategoryId));
        }

        return $subcategories;
    }

    public function women_wigs()
    {
        $pageTitle = 'Women Wigs';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_wigs')->first();

        $HumanHairWigsCategory = Category::where('name', 'Human Hair Wigs')->first();

        if (!$HumanHairWigsCategory) {
            return view('Template::women_human_hair_toppers_product', compact('pageTitle', 'sections'))->withErrors('HumanHairWigs category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($HumanHairWigsCategory->id);
        $categoryIds[] = $HumanHairWigsCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::women_wigs', compact('pageTitle', 'sections', 'products'));
    }

    public function women_toppers()
    {
        $pageTitle = 'Women Toppers';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_toppers')->first();

        // Step 1:
        $HumanHairToppersCategory = Category::where('name', 'Human Hair Toppers')->first();

        if (!$HumanHairToppersCategory) {
            return view('Template::women_toppers', compact('pageTitle', 'sections'))->withErrors('HumanHairToppers category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($HumanHairToppersCategory->id);
        $categoryIds[] = $HumanHairToppersCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::women_toppers', compact('pageTitle', 'sections', 'products'));
    }

    public function women_systems()
    {
        $pageTitle = 'Women Systems';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_systems')->first();

        // Step 1:
        $womeSystemsCategory = Category::where('name', 'Women Hair Systems')->first();

        if (!$womeSystemsCategory) {
            return view('Template::women_systems', compact('pageTitle', 'sections'))->withErrors('womeSystems category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($womeSystemsCategory->id);
        $categoryIds[] = $womeSystemsCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::women_systems', compact('pageTitle', 'sections', 'products'));
    }

    public function women_medical()
    {
        $pageTitle = 'Women Medical';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_medical')->first();

        // Step 1:
        $MedicalGradeWigsCategory = Category::where('name', 'Medical Grade Wigs')->first();

        if (!$MedicalGradeWigsCategory) {
            return view('Template::women_human_hair_toppers_product', compact('pageTitle', 'sections'))->withErrors('MedicalGradeWigs category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($MedicalGradeWigsCategory->id);
        $categoryIds[] = $MedicalGradeWigsCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::women_medical', compact('pageTitle', 'sections', 'products'));
    }

    public function women_lace()
    {
        $pageTitle = 'Women Lace';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_lace')->first();
        return view('Template::women_lace', compact('pageTitle', 'sections'));
    }

    public function women_integrations()
    {
        $pageTitle = 'Women Integrations';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'women_integrations')->first();

        // Step 1:
        // Step 1:
        $WomenHairIntegrationsCategory = Category::where('name', 'Women Hair Integrations System')->first();

        if (!$WomenHairIntegrationsCategory) {
            return view('Template::women_human_hair_toppers_product', compact('pageTitle', 'sections'))->withErrors('WomenHairIntegrations category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($WomenHairIntegrationsCategory->id);
        $categoryIds[] = $WomenHairIntegrationsCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::women_integrations', compact('pageTitle', 'sections', 'products'));
    }
}
