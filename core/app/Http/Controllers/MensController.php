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

class MensController extends Controller
{
    // Mens Hair System
    public function mens_hair_system()
    {
        $pageTitle = 'Mens Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_hair_system')->first();

        $menCategory = Category::where('name', 'Mens')->first();

        if (!$menCategory) {
            return view('Template::mens_hair_system', compact('pageTitle', 'sections'))->withErrors('men category not found.');
        }

        // Step 2: Retrieve all subcategories of Women
        $subcategoryIds = $this->getSubcategoryIds($menCategory->id);
        $subcategoryIds[] = $menCategory->id; // Include Women category itself

        // Step 3: Fetch products that belong to Women or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($subcategoryIds) {
                $query->whereIn('categories.id', $subcategoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        // Step 4: Fetch product categories (subcategories of Women)
        $product_categories = Category::where('parent_id', $menCategory->id)->featured()->orderBy('name', 'asc')->get();

        return view('Template::mens_hair_system', compact('pageTitle', 'sections', 'products', 'product_categories'));
    }

    private function getSubcategoryIds($parentId)
    {
        $subcategories = Category::where('parent_id', $parentId)->pluck('id')->toArray();

        foreach ($subcategories as $subcategoryId) {
            $subcategories = array_merge($subcategories, $this->getSubcategoryIds($subcategoryId));
        }

        return $subcategories;
    }
    public function mens_stock_hair_system()
    {
        $pageTitle = 'Mens Stock Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_stock_hair_system')->first();
        // dd($sections);

        // "Men" Product
        $mensStockCategory = Category::where('name', 'Stock')->first();

        if (!$mensStockCategory) {
            return view('Template::mens_stock_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensStock category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensStockCategory->id);
        $categoryIds[] = $mensStockCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_stock_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_custom_hair_system()
    {
        $pageTitle = 'Mens Custom Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_custom_hair_system')->first();
        // dd($sections);
        $mensCategory = Category::where('slug', 'mens')->first();
        $Subcategory = Category::where('parent_id', $mensCategory->id)->where('slug', 'custom')->first();
        $products = $Subcategory->products()->get();
        return view('Template::mens_custom_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_repear_hair_system()
    {
        $pageTitle = 'Mens repear Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_repear_hair_system')->first();
        // dd($sections);

        $mensCategory = Category::where('slug', 'mens')->first();
        $Subcategory = Category::where('parent_id', $mensCategory->id)->where('slug', 'repair')->first();
        $products = $Subcategory->products()->get();

        return view('Template::mens_repear_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_afro_hair_system()
    {
        $pageTitle = 'Mens Afro Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_afro_hair_system')->first();
        // dd($sections);

        $mensAfroCategory = Category::where('name', 'afro')->first();

        if (!$mensAfroCategory) {
            return view('Template::mens_afro_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensAfro category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensAfroCategory->id);
        $categoryIds[] = $mensAfroCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_afro_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_lace_hair_system()
    {
        $pageTitle = 'Mens Lace Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_lace_hair_system')->first();
        // dd($sections);

        $mensLaceCategory = Category::where('name', 'lace')->first();

        if (!$mensLaceCategory) {
            return view('Template::mens_lace_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensLace category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensLaceCategory->id);
        $categoryIds[] = $mensLaceCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_lace_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_skin_hair_system()
    {
        $pageTitle = 'Mens Skin Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_skin_hair_system')->first();
        // dd($sections);

        $mensSkinCategory = Category::where('name', 'skin')->first();

        if (!$mensSkinCategory) {
            return view('Template::mens_skin_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensskinhair category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensSkinCategory->id);
        $categoryIds[] = $mensSkinCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_skin_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_mono_hair_system()
    {
        $pageTitle = 'Mens Mono Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_mono_hair_system')->first();
        // dd($sections);

        $mensMonoCategory = Category::where('name', 'mono')->first();

        if (!$mensMonoCategory) {
            return view('Template::mens_mono_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensskinhair category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensMonoCategory->id);
        $categoryIds[] = $mensMonoCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_mono_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_frontal_hair_system()
    {
        $pageTitle = 'Mens Frontal Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_frontal_hair_system')->first();
        // dd($sections);

        $mensFrontalCategory = Category::where('name', 'frontal')->first();

        if (!$mensFrontalCategory) {
            return view('Template::mens_frontal_hair_system_product', compact('pageTitle', 'sections'))->withErrors('mensFrontal category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($mensFrontalCategory->id);
        $categoryIds[] = $mensFrontalCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_frontal_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_crown_hair_system()
    {
        $pageTitle = 'Mens Crown Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_crown_hair_system')->first();
        // dd($sections);
        $menscrownCategory = Category::where('name', 'crown')->first();

        if (!$menscrownCategory) {
            return view('Template::mens_crown_hair_system_product', compact('pageTitle', 'sections'))->withErrors('menscrown category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($menscrownCategory->id);
        $categoryIds[] = $menscrownCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);

        return view('Template::mens_crown_hair_system', compact('pageTitle', 'sections', 'products'));
    }
    public function mens_cap_hair_system()
    {
        $pageTitle = 'Mens Cap Hair System';
        $sections = Page::where('tempname', activeTemplate())->where('slug', 'mens_cap_hair_system')->first();
        // dd($sections);

        $menscapCategory = Category::where('name', 'crown')->first();

        if (!$menscapCategory) {
            return view('Template::mens_cap_hair_system_product', compact('pageTitle', 'sections'))->withErrors('menscap category not found.');
        }

        // Step 2:
        $categoryIds = $this->getSubcategoryIds($menscapCategory->id);
        $categoryIds[] = $menscapCategory->id; // Include Clip-In category itself

        // Step 3: Fetch products that belong to toppers or its subcategories
        $products = Product::published()
            ->shopPageProducts()
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->with(['displayImage', 'galleryImages'])
            ->paginate(9);


        return view('Template::mens_cap_hair_system', compact('pageTitle', 'sections', 'products'));
    }
}
