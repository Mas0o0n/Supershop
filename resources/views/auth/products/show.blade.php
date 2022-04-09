@extends('auth.layouts.base_admin')
@section('title', 'Product: ' . $product->name)
@section('content')
    <div class="container">
        <div class="check-out">

            <table >
                <tbody>
                <tr>
                    <th>Field</th>
                    <th>Context</th>
                <tr>
                    <td>Product Brand</td>
                    <td><h5>{{ $product->brand }}</h5></td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><h5>{{ $product->name }}</h5></td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td><h5>{{ $product->description }}</h5></td>
                </tr>
                <tr>
                <tr>
                    <td>Products Category</td>
                    <td><h5>{{ $product->category->name }}</h5></td>
                </tr>
                    <td>Product Code</td>
                    <td><h5>{{ $product->code }}</h5></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><h5>{{ $product->price }} $</h5></td>
                </tr>
                <tr>
                    <td>Category Image</td>
                    <td><img src="{{ Storage::url($product->image) }}" class="img-responsive" alt=""/></td>
                </tr>
                </tbody>
            </table>


            <a href="{{ route( 'products.edit', $product ) }}" class="btn to-buy">EDIT PRODUCT</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
@endsection
