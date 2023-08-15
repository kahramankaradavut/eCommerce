<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function mainPage() {
        return view('frontend.pages.index');
    }
}
