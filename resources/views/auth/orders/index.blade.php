@extends('auth.layouts.base_admin')
@section('title', 'Current Orders')
@section('content')
    <div class="container">
        <div class="check-out">
            <table >
                <tr>
                    <th>Order №</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Confirmed at</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                   @foreach($orders as $order)
                        <tr>
                            <td><h4>{{ $order->id }}</h4>
                            </td>
                            <td><h4>{{ $order->user_id }}</h4>
                            </td>
                            <td><h4>{{ $order->name }}</h4>
                                 </td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->updated_at->format('H:i d/m/Y') }}</td>
                            <td>${{ $order->getTotalCost() }}</td>
                            <td> <a href="{{ route('order-show', $order->id) }}" class="btn to-buy">Open</a>
                            </td>
                        </tr>
                    @endforeach

            </table>
        </div>
    </div>
    </div>
@endsection
