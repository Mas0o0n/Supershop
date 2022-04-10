@extends('auth.layouts.base_admin')
@isset($product)
        @section('title', 'EDIT PRODUCT: ' .$product->name)
@else
    @section('title', 'NEW PRODUCT')
@endisset


@section('content')
    <div class="container">
        <div class="check-out">
            <form  method="POST" enctype="multipart/form-data"
                   @isset($product)
                   action="{{ route('products.update', $product) }}"
                   @else
                   action="{{ route('products.store') }}"
                @endisset
            >
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf

            <table >
                <tbody>
                <tr>
                    <th>Field</th>
                    <th>Context</th>
                <tr>
                    <td>Product Brand</td>
                    @error('brand')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <td><div class="col-md-1 "><input type="text" size="50" name="brand" value="@isset($product){{ $product->brand }} @endisset"></div></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <td><div class="col-md-9 "><input type="text" size="50" name="name" value="@isset($product){{ $product->name }} @endisset"></div></td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <td><div class="col-md-9 "><textarea  name="description" rows="10" cols="48" >@isset($product){{ $product->description }} @endisset</textarea></div></td>
                </tr>
                <tr>
                <tr>
                    <td>Products Category</td>
                    <td><div class="col-md-1 "><select name="category_id" size="1" >
                             @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                @isset($product)
                                    @if($product->category_id == $category->id )
                                        selected
                                        @endif
                                    @endisset
                                >{{$category->name}}
                                </option>
                             @endforeach
                       </select></td>
                </tr>
                <td>Product Code</td>
                @error('code')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <td><div class="col-md-1 "><input type="text" size="15" name="code" value="@isset($product){{ $product->code }} @endisset"></div></td>
                </tr>
                <tr>
                    <td>Product Price, $</td>
                    @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <td><div class="col-md-1 "><input type="text" size="15" name="price" value="@isset($product){{ $product->price }} @endisset"></div></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <td>@isset($product)
                        <img src="{{ Storage::url($product->image) }}" class="img-responsive" alt=""/></td>
                    @endisset
                </tr>
                @isset($product)
                <tr>
                    <td>Change Product Image</td>
                   <td><input type="file" name="image" ></td>
                </tr>
                @endisset

                </tbody>

            </table>
                    <div class="clearfix"> </div>
                    @csrf
                    <input type="submit" class="btn to-buy" value="@isset($product) Save Changes @else Add Product @endisset">
                </form>
        </div>
    </div>
    <!--//content-->
@endsection
