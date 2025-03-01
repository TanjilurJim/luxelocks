<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;

class AboutController extends Controller
{
    public function about()
    {
        $pageTitle   = 'About';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'about')->first();
        return view('Template::about', compact('pageTitle', 'sections'));
    }

    public function about_exhibitions()
    {
        $pageTitle   = 'About Exhibitions';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'about_exhibitions')->first();
        return view('Template::about_exhibitions', compact('pageTitle', 'sections'));
    }

    public function about_factory()
    {
        $pageTitle   = 'About Factory';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'about_factory')->first();
        return view('Template::about_factory', compact('pageTitle', 'sections'));
    }

    public function about_team()
    {
        $pageTitle   = 'About Team';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'about_team')->first();
        return view('Template::about_team', compact('pageTitle', 'sections'));
    }

    public function about_what()
    {
        $pageTitle   = 'About What';
        $sections    = Page::where('tempname', activeTemplate())->where('slug', 'about_what')->first();
        return view('Template::about_what', compact('pageTitle', 'sections'));
    }
}
