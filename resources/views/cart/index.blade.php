@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="check-out">
            <h2>Checkout</h2>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Summary Cost</th>
                    <th>Edit</th>
                </tr>
                @foreach($order->products as $product)
                <tr>
                    <td class="ring-in"><a href="{{ route('product', $product->id )}}" class="at-in"><img src="{{ asset("$product->image") }}" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>{{$product->name}}</h5>
                            <p></p>

                        </div>
                        <div class="clearfix"> </div></td>
                    <td>{{$product->pivot->count}}</td>
                    <td>${{$product->price}}</td>
                    <td>${{$product->costForCount()}}</td>
                    <td> <form action="{{ route('cart-add', $product->id )}}" method="POST">
                            <button type="submit" class="item_add">+</button>
                        @csrf
                        </form>
                        <form action="{{ route('cart-remove', $product->id )}}" method="POST">
                            <button type="submit" class="item_remove">-</button>
                        @csrf
                        </form>
                    </td>

                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total Cost</td>
                    <td>{{ $order->getTotalCost() }}</td>
                </tr>
                </table>

            <a href="#" class=" to-buy">PROCEED TO BUY</a>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
