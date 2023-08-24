<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function products(Request $request)
    {
      $size = $request->size ?? null;

      $color = $request->color ?? null;

      $startPrice = $request->start_price ?? null;

      $endPrice = $request->end_price ?? null;
      
      $order = $request->order ?? 'id';

      $short = $request->short ?? 'desc';

      $products = Product::where('status', '1')
      ->where( function($q) use($size, $color, $startPrice, $endPrice){
         if(!empty($startPrice && $endPrice)){
            $q->whereBetween('price', [$startPrice, $endPrice]);
         }
         if(!empty($size)){
            $q->where('size', $size);
         } 
         if(!empty($color)){       
            $q->where('color', $color);
         }
         return $q;
      })
      ->with('category');

      $minPrice = $products->min('price');
      $maxPrice = $products->max('price');

      $sizeLists = Product::where('status', '1')->groupBy('size')->pluck('size')->toArray();
      $colors = Product::where('status', '1')->groupBy('color')->pluck('color')->toArray();

      $products = $products->orderBy($order, $short)->paginate(1);

      $Maincategories = Category::where('status', '1')->where('cat_ust', null)->withCount('items')->get();


      $slider = Slider::where('status', '1')->first();
      $categories = Category::where('status', '1')->get();
      $about = About::where('id', 1)->first();
      return view('frontend.pages.products', compact('slider', 'about', 'categories', 'products', 'Maincategories', 'minPrice', 'maxPrice', 'sizeLists', 'colors'));
    }

    public function sale()
    {
      $slider = Slider::where('status', '1')->first();
      $categories = Category::where('status', '1')->get();
      $about = About::where('id', 1)->first();
      return view('frontend.pages.products', compact('slider', 'about', 'categories'));

    }

    public function productsDetails($slug)
    {
      $product = Product::whereSlug($slug)->first();
      $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        $about = About::where('id', 1)->first();
        return view('frontend.pages.productsDetails', compact('slider', 'about', 'categories', 'product'));

    }

    public function about()
    {
      $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        $about = About::where('id', 1)->first();
        return view('frontend.pages.about', compact('slider', 'about', 'categories'));

    }

    public function contact()
    {
      $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        $about = About::where('id', 1)->first();
        return view('frontend.pages.contact', compact('slider', 'about', 'categories'));

    }

    public function cart()
    {
      $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        $about = About::where('id', 1)->first();
        return view('frontend.pages.cart', compact('slider', 'about', 'categories'));

    }
}
