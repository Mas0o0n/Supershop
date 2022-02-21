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
                            <td><h5>{{ $order->id }}</h5>
                            </td>
                            <td><h5>{{ $order->user_id }}</h5>
                            </td>
                            <td><h5>{{ $order->name }}</h5>
                                 </td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->updated_at->format('H:i d/m/Y') }}</td>
                            <td>${{ $order->getTotalCost() }}</td>
                            <td> <a href="{{''}}" class=" to-buy">Open</a>
                            </td>
                        </tr>
                    @endforeach

            </table>
        </div>
    </div>
    </div>
@endsection
