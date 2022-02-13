<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $categories = Category::get();
        $products = Product::latest('id')->limit(9)->get();
        return view('site.index',compact('categories', 'products'));
    }
}
