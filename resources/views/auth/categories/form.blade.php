@extends('auth.layouts.base_admin')
@isset($category)
    @section('title', 'EDIT CATEGORY: ' .$category->name)
@else
    @section('title', 'NEW CATEGORY')
@endisset


@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-grids">
                <div class="contact-form">

                    <form  method="POST" enctype="multipart/form-data"
                        @isset($category)
                            action="{{ route('categories.update', $category) }}"
                        @else
                            action="{{ route('categories.store') }}"
                        @endisset
                    >
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="contact-bottom">
                            <div class="col-md-4 in-contact">
                                <div class="col-md-9 in-contact">
                                <span>Category Name</span>
                                <input type="text" name="name" value="@isset($category){{ $category->name }} @endisset">
                                </div></div>
                                <br>
                            <div class="col-md-5 in-contact">
                                <span>Image</span>
                                <input type="file" name="img" >

                            <div class="clearfix"> </div>
                        </div>
                        @csrf
                        <input type="submit" value="@isset($category) Save Changes @else Create Category @endisset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//content-->
@endsection
