<!DOCTYPE html>
<html>

<head>
    @section('head')
        <title>SuperShop</title>
        <link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <!-- start menu -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/simpleCart.min.js') }}"> </script>
        <!-- slide -->
        <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: false,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!-- animation-effect -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script>
            new WOW().init();
        </script>
        <!-- //animation-effect -->
    @show
</head>
<!--header-->
@section('header')
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                    <h1><a href="/">Super<span>Shop</span></a></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="n-avigation">

                    <nav class="navbar nav_bottom" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{route('categories.index')}}">Categories</a></li>
                                <li class="last"><a href="#">Products</a></li>
                                @guest
                                    <li><a href="{{route('login')}}">Log In</a></li>
                                @endguest
                                @auth
                                    <li><a href="{{route('get-logout')}}">Log Out</a></li>
                                @endauth
                            </ul>
                        </div>

                    </nav>
                </div>


                <div class="clearfix"> </div>
                <!---pop-up-box---->
                <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
                <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
                <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login">
                            <form action="#" method="post">
                                <input type="submit" value="">
                                <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

                            </form>
                        </div>
                        <p>	@yield('title')</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
                <!---->
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ route('home' )}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">@yield('title')</li>
            </ol>
        </div>
    </div>
    <div class="account">
        <div class="container">
            <h2>@yield('title')</h2>
@show

<!--content-->
@yield('content')

<!--footer-->
@section('footer')
    <div class="footer">

            </div>
        </div>
    </div>
@show

<!--footer-->
</body>
</html>
