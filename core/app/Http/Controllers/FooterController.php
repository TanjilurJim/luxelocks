<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    //

    public function index()
    {
        return view('Template::privacy-policies');

    }
    public function terms()
    {
        return view('Template::terms');

    }
    public function locationshipto()
    {
        return view('Template::locations-we-ship-to');

    }
    public function customerCopyRight()
    {
        return view('Template::customer-copyright-protection');

    }
    public function feedback()
    {
        return view('Template::feedback-and-complaints');

    }
}
