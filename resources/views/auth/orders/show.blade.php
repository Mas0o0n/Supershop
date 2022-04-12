@extends('auth.layouts.base_admin')
@section('title', 'Order №' . $order->id )
@section('content')
    <div class="container">
        <div class="check-out">
            <p>Customer Name: <b> {{ $order->name }} </b></p>
            <p>Phone: <b> {{ $order->phone }} </b></p>
            <p>Comment:<b> {{ $order->comment}} </b></p>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Summary Cost</th>

                </tr>
               @foreach($order->products as $product)
                        <tr>
                            <td class="ring-in"><a href="{{ route('product', $product->id )}}" class="at-in"><img src="{{ Storage::url($product->image) }}" class="img-responsive" alt=""></a>
                                <div class="sed">
                                    <h5>{{$product->name}}</h5>
                                    <p></p>

                                </div>
                                <div class="clearfix"> </div></td>
                            <td>{{$product->pivot->count}}</td>
                            <td>${{$product->price}}</td>
                            <td>${{$product->costForCount()}}</td>
                    @endforeach
                    <tr>
                        <td colspan="3">Total Cost</td>
                        <td>{{ $order->getTotalCost() }}</td>
                    </tr>
            </table>
        </div>
    </div>
    </div>
@endsection
