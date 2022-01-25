<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts() {
        $products = Product::get();
        return $products;
    }

    public function index() {
            $products = $this->getProducts();
            return view('product.single',compact('products'));
    }

    public function product($id) {
        $products = $this->getProducts();
        $product = Product::where('id', $id)->first();


        return view('product.single', compact('product'), compact('products'));
    }


}
