<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function products()
    {
        return view('frontend.pages.products');
    }

    public function sale()
    {
        return view('frontend.pages.products');
    }

    public function productsDetails()
    {
        return view('frontend.pages.productsDetails');
    }

    public function about()
    {
        $about = About::where('id', 1)->first();
        return view('frontend.pages.about', compact('about'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }
}
