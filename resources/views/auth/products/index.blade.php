@extends('auth.layouts.base_admin')
@section('title', 'Products')
@section('content')
    <div class="container">
        <div class="check-out">
            <table >
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Actions</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td><h4>{{ $product->id}}</h4>
                        </td>
                        <td><h4>{{ $product->name}}</h4>
                        </td>
                       <td>
                           <div class="btn-group-sm" role="group">
                           <form action="{{route('products.destroy', $product)}}" method="POST">

                           <a type="button" class="btn btn-success"  href="{{ route( 'products.show', $product ) }}" >Open</a>
                           <a type="button" class="btn btn-warning" href="{{ route('products.edit', $product )}}" >Edit</a>
                           @csrf
                           @method('DELETE')
                           <input class="btn btn-danger" type="submit" value="Delete"></form>
                       </td>
                    </tr>
                    <div>

                    </div>
                       @endforeach
                       </table>
            <a href="{{ route('products.create' )}}" class="btn to-buy">NEW PRODUCT</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
@endsection
