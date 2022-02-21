@extends('auth.layouts.base_admin')
@section('title', 'Current Orders')
@section('content')
    <div class="container">
        <div class="check-out">
            <table >
                <tr>
                    <th>№</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td><h4>{{ $category->id}}</h4>
                        </td>
                        <td><h4>{{ $category->name }}</h4>
                        </td>
                       <td>
                           <div class="btn-group-sm" role="group">
                           <form action="{{route('categories.destroy', $category)}}" method="POST">

                           <a type="button" class="btn btn-success"  href="{{ route( 'categories.show', $category ) }}" >Open</a>
                           <a type="button" class="btn btn-warning" href="{{ route('categories.edit', $category )}}" >Edit</a>
                           @csrf
                           @method('DELETE')
                           <input class="btn btn-danger" type="submit" value="Delete"></form>
                       </td>
                    </tr>
                    <div>

                    </div>
                       @endforeach
                       </table>
            <a href="{{ route('categories.create' )}}" class="btn to-buy">NEW CATEGORY</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
@endsection
