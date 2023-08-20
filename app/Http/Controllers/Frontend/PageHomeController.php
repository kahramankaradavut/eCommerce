<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function mainPage()
    {
        $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        return view('frontend.pages.index', compact('slider', 'categories'));
    }
}
