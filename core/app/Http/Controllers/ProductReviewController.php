<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Auth;


class ProductReviewController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:500',
        ]);

        $product = Product::findOrFail($id);

        // Prevent duplicate reviews
        if (ProductReview::where('product_id', $id)->where('user_id', Auth::id())->exists()) {
            return back()->with('error', 'You have already reviewed this product.');
        }

        ProductReview::create([
            'user_id' => Auth::id(),
            'product_id' => $id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return back()->with('success', 'Your review has been submitted.');
    }
}
