<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteAdminController extends Controller
{
    //

    public function index()
    {
        $quotes = Quote::orderBy('id', 'desc')->paginate(20);

        // Add a $pageTitle
        $pageTitle = 'All Quotes';
        return view('admin.quotes.index', compact('quotes', 'pageTitle'));
    }

    public function pending()
    {
        $quotes = Quote::where('status', 'pending')->orderBy('id', 'desc')->paginate(20);
        $pageTitle = 'Pending Quotes';
        return view('admin.quotes.index', compact('quotes', 'pageTitle'));
    }

    public function approved()
    {
        $quotes = Quote::where('status', 'approved')->orderBy('id', 'desc')->paginate(20);
        $pageTitle = 'Approved Quotes';
        return view('admin.quotes.index', compact('quotes', 'pageTitle'));
    }

    public function show(Quote $quote)
    {
        // Eager-load related QuoteItems with Product & Variant details
        $quote->load('quoteItems.product', 'quoteItems.variant');

        // Set the page title
        $pageTitle = 'Quote Details';

        return view('admin.quotes.show', compact('quote', 'pageTitle'));
    }

    public function approve(Quote $quote)
    {
        $quote->update(['status' => 'approved']);
        return back()->with('success', 'Quote approved successfully!');
    }

    public function reject(Quote $quote)
    {
        $quote->update(['status' => 'rejected']);
        return back()->with('success', 'Quote rejected successfully!');
    }
}
