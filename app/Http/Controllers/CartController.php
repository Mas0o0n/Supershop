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
        } else {
            $order = null;
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

    if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
           $pivotRow->count++;
           $pivotRow->update();

       } else {
           $order->products()->attach($productId);
       }

        return redirect()->route('cart');
       }

    public function cartRemove($productId) {
        $categories = Category::get();

        $orderId = session('orderId');
        if (is_null($orderId)) {
        return view('cart.index');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2 ) {
                $order->products()->detach($productId);
            }else {
                $pivotRow->count--;
                $pivotRow->update();
            }

        }
        return redirect()->route('cart');
    }

    public function confirmOrder()
    {
        $orderId = session('orderId');
        $categories = Category::get();
        if (is_null($orderId)) {
            return redirect()->route('home');
        }

        $order = Order::find($orderId);

        return view('cart.confirm', compact ('order','categories'));
    }

    public function saveOrder(Request $request) {
        $orderId = session('orderId');
        $categories = Category::get();
        if (is_null($orderId)) {
            return redirect()->route('home');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phonenumber, $request->comment);

        if ($success) {
            session()->flash('success', 'Your order confirmed! We will call you!');
        } else {
            session()->flash('warning', 'Error occured');
        }



        return redirect(route('home'));

    }



}
