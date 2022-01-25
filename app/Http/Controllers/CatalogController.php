<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function getCategories() {
    $categories = Category::get();
    return $categories;
    }

    public function getCategoryById($categoryId) {
    $categoryById = Category::where('id', $categoryId)->first();
    return $categoryById;
    }

//    public function getCategoryByName($categoryName) {
//        $categoryByName = Category::where('name', $categoryName)->first();
//        return $categoryByName;
//    }

    public function index() {
        $categories = $this->getCategories();
        $products = Product::get();

        return view('catalog.index',compact('categories', 'products'));
    }


    public function category($categoryId) {

        $categories = $this->getCategories();
        $category = $this->getCategoryById($categoryId);

        $products = Category::find($categoryId)->products;


        return view('catalog.category', compact('category','categories','products'));

    }


}
