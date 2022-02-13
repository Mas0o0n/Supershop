@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="check-out">
            <h2>Checkout</h2>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Prices</th>
                    <th>Delivery details</th>
                    <th>Sub total</th>
                </tr>
                @foreach($order->products as $product)
                <tr>
                    <td class="ring-in"><a href="{{ route('product', $product->id )}}" class="at-in"><img src="{{ asset("$product->image") }}" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>{{$product->name}}</h5>
                            <p></p>

                        </div>
                        <div class="clearfix"> </div></td>
                    <td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
                    <td>${{$product->price}}</td>
                    <td>FREE SHIPPING</td>
                    <td>$100.00</td>
                </tr>
                @endforeach
                </table>
            <a href="#" class=" to-buy">PROCEED TO BUY</a>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
