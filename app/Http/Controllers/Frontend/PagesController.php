<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Frontend Home Page
    public function home()
    {
        return view('frontend.pages.home');
    }
    //About Page
    public function about()
    {
        return view('frontend.pages.static-pages.about');
    }

    //Contact Page
    public function contact()
    {
        return view('frontend.pages.static-pages.contact');
    }

    // Error 404 Page Not Found
    public function error404()
    {
        return view('frontend.pages.404');
    }
}
