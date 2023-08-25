<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function mainPage()
    {
        $slider = Slider::where('status', '1')->first();

        $about = About::where('id', 1)->first();
        return view('frontend.pages.index', compact('slider', 'about'));
    }
}
