@extends('auth.layouts.base_admin')
@section('title', 'Register')
@section('content')
    <form action="{{ route('register') }}" method="POST">
                   @csrf
                <div class="col-md-6  register-top-grid">
                    <div class="mation">
                        <span>Name</span>
                        <input type="text" name="name">
                        <span>Email Address</span>
                        <input type="text" name="email">
                    </div>
                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
                    </a>
                </div>
                <div class=" col-md-6 register-bottom-grid">
                    <div class="mation">
                        <span>Password</span>
                        <input type="password" name="password">
                        <span>Confirm Password</span>
                        <input type="password" name="password_confirmation">
                    </div>
                </div>
                   <div class="register-but">
                       <input type="submit" value="Register">
                           <div class="clearfix"> </div>
                       </div>

    </form>

@endsection
