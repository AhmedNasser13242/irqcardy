<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index (){
        $categories = Category::where('status', '0')->get();
        $sliders = Slider::where('status','0')->get();
        return view('frontend.index',compact('sliders','categories'));
    }
    public function categories (){
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index',compact('categories'));
    }

    public function products ($category_slug) {
        $category = Category::where('slug', $category_slug)->first();

        if($category){
            $products = $category->products()->get();
            return view('frontend.collections.product.index',compact('category','products'));
        }else{

            return redirect()->back();
        }
    }
}