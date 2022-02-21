@extends('auth.layouts.base_admin')
@section('title', 'Category: ' . $category->name)
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
                    <td><h5>{{ $category->id}}</h5></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><h5>{{ $category->name }}</h5></td>
                </tr>
                <tr>
                    <td>Products in Category</td>
                    <td><h5>{{ $category->products->count() }}</h5></td>
                </tr>
                <tr>
                    <td>Category Image</td>
                    <td><img src="{{ $category->img }}" class="img-responsive" alt=""/></td>
                </tr>
                </tbody>
            </table>


            <a href="{{ route('categories.edit', $category) }}" class="btn to-buy">EDIT CATEGORY</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
@endsection
