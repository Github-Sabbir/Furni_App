<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage()
    {
        return view('Frontend.homePage');
    }
    public function shopPage()
    {
        return view('Frontend.shopPage');
    }
    public function aboutUsPage()
    {
        return view('Frontend.aboutUsPage');
    }
    public function servicePage()
    {
        return view('Frontend.servicePage');
    }
    public function blogPage()
    {
        return view('Frontend.blogPage');
    }
    public function contactUsPage()
    {
        return view('Frontend.contactUsPage');
    }
    public function addToCartPage()
    {
        return view('Frontend.addToCartPage');
    }
    public function completedOderPage()
    {
        return view('Frontend.completedOderPage');
    }
}
