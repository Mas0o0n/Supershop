@extends('auth.layouts.base_admin')
@isset($product)
    @section('title', 'EDIT PRODUCT: ' .$product->name)
@else
    @section('title', 'NEW PRODUCT')
@endisset


@section('content')
    <div class="container">
        <div class="check-out">

            <table >
                <tbody>
                <tr>
                    <th>Field</th>
                    <th>Context</th>

                <tr>
                    <td>ID</td>
                    <td><h5>{{ $product->id}}</h5></td>
                </tr>
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
                    <td><img src="{{ Storage::url($product->img) }}" class="img-responsive" alt=""/></td>
                </tr>
                </tbody>
            </table>


            <a href="{{ route( 'products.edit', $product ) }}" class="btn to-buy">EDIT PRODUCT</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>



    <div class="contact">
        <div class="container">
            <div class="contact-grids">
                <div class="contact-form">

                    <form  method="POST" enctype="multipart/form-data"
                        @isset($product)
                            action="{{ route('categories.update', $product) }}"
                        @else
                            action="{{ route('categories.store') }}"
                        @endisset
                    >
                        @isset($product)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="contact-bottom">
                            <div class="col-md-4 in-contact">
                                <div class="col-md-9 in-contact">
                                <span>Product Name</span>
                                <input type="text" name="name" value="@isset($product){{ $product->name }} @endisset">
                                </div></div>
                                <br>
                            <div class="col-md-5 in-contact">
                                <span>Image</span>
                                <input type="file" name="img" >

                            <div class="clearfix"> </div>
                        </div>
                        @csrf
                        <input type="submit" value="@isset($product) Save Changes @else Add Product @endisset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//content-->
@endsection
