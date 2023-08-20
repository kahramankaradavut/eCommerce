<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function mainPage()
    {
        $slider = Slider::where('status', '1')->first();
        return view('frontend.pages.index', compact('slider'));
    }
}
