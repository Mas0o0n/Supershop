<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
       $categories = Category::get();

        $orderId = session('orderId');

        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('cart.index', compact('categories','order'));
    }

    public function cartAdd($productId) {
        $categories = Category::get();

        $orderId = session('orderId');
       if (is_null($orderId)) {
           $order = Order::create()->id;
              session(['orderId' => $order]);
       } else {
           $order = Order::find($orderId);
       }
        $order->products()->attach($productId);


       return view('cart.index', compact('order', 'categories'));


    }

}
