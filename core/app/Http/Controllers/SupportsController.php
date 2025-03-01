<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;


class SupportsController extends Controller
{
    public function support()
    {
        $pageTitle   = 'Support';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support')->first();
        return view('Template::support', compact('pageTitle', 'sections'));
    }

    public function support_ambassador()
    {
        $pageTitle   = 'Support Ambassador';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_ambassador')->first();
        return view('Template::support_ambassador', compact('pageTitle', 'sections'));
    }

    public function support_catalogs()
    {
        $pageTitle   = 'Support Catalogs';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_catalogs')->first();
        return view('Template::support_catalogs', compact('pageTitle', 'sections'));
    }

    public function support_charts()
    {
        $pageTitle   = 'Support Charts';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_charts')->first();
        return view('Template::support_charts', compact('pageTitle', 'sections'));
    }

    public function support_choose()
    {
        $pageTitle   = 'Support Choose';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_choose')->first();
        return view('Template::support_choose', compact('pageTitle', 'sections'));
    }

    public function support_direction()
    {
        $pageTitle   = 'Support Direction';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_direction')->first();
        return view('Template::support_direction', compact('pageTitle', 'sections'));
    }

    public function support_dropshipping()
    {
        $pageTitle   = 'Support Dropshipping';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_dropshipping')->first();
        return view('Template::support_dropshipping', compact('pageTitle', 'sections'));
    }

    public function support_extensions()
    {
        $pageTitle   = 'Support Extensions';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_extensions')->first();
        return view('Template::support_extensions', compact('pageTitle', 'sections'));
    }

    public function support_faqs()
    {
        $pageTitle   = 'Support FAQs';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_faqs')->first();
        return view('Template::support_faqs', compact('pageTitle', 'sections'));
    }

    public function support_order()
    {
        $pageTitle   = 'Support Order';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_order')->first();
        return view('Template::support_order', compact('pageTitle', 'sections'));
    }

    public function support_policy()
    {
        $pageTitle   = 'Support Policy';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_policy')->first();
        return view('Template::support_policy', compact('pageTitle', 'sections'));
    }

    public function support_prices()
    {
        $pageTitle   = 'Support Prices';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_prices')->first();
        return view('Template::support_prices', compact('pageTitle', 'sections'));
    }

    public function support_service()
    {
        $pageTitle   = 'Support Service';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_service')->first();
        return view('Template::support_service', compact('pageTitle', 'sections'));
    }

    public function support_signup()
    {
        $pageTitle   = 'Support Signup';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_signup')->first();
        return view('Template::support_signup', compact('pageTitle', 'sections'));
    }

    public function support_solutions()
    {
        $pageTitle   = 'Support Solutions';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_solutions')->first();
        return view('Template::support_solutions', compact('pageTitle', 'sections'));
    }

    public function support_startup()
    {
        $pageTitle   = 'Support Startup';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_startup')->first();
        return view('Template::support_startup', compact('pageTitle', 'sections'));
    }

    public function support_tester()
    {
        $pageTitle   = 'Support Tester';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_tester')->first();
        return view('Template::support_tester', compact('pageTitle', 'sections'));
    }

    public function support_toppers()
    {
        $pageTitle   = 'Support Toppers';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_toppers')->first();
        return view('Template::support_toppers', compact('pageTitle', 'sections'));
    }

    public function support_track()
    {
        $pageTitle   = 'Support Track';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_track')->first();
        return view('Template::support_track', compact('pageTitle', 'sections'));
    }

    public function support_training()
    {
        $pageTitle   = 'Support Training';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_training')->first();
        return view('Template::support_training', compact('pageTitle', 'sections'));
    }

    public function support_wigs()
    {
        $pageTitle   = 'Support Wigs';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'support_wigs')->first();
        return view('Template::support_wigs', compact('pageTitle', 'sections'));
    }
}
