@extends('layouts.base')
@section('content')


    <!--banner-->
        <div class="banner">
            <div class="matter-banner">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="{{ asset('images/2.jpg') }}" alt="">
                                <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2>Only For MEN</h2>
                                    <h3></h3>
                                    <h4>UPTO 50%</h4>
                                    <p>OFFER</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('images/3.jpg') }}" alt="">
                                <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2>MEN & WOMEN</h2>
                                    <h3>Trousers & Chinos</h3>
                                    <h4>UPTO 50%</h4>
                                    <p>OFFER</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('images/2.jpg') }}" alt="">
                                <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2>MEN & WOMEN</h2>
                                    <h3>Trousers & Chinos</h3>
                                    <h4>UPTO 50%</h4>
                                    <p>OFFER</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--//banner-->
            <div class="content">
                <div class="container">
                    <div class="content-top">
                        <div class="content-top1">
                            <div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                                <div class="col-md3">
                                    <div class="up-t">
                                        <h3> Get your personal offer for registration!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//content-->
            <div class="con-tp">
                <div class="container">
                    <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
                        <a href="/get_offer">
                            <div class="content-grid-effect slow-zoom vertical">
                                <div class="img-box"><img src="{{ asset('images/6.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                        <h4>Click to get offer!</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                        <a href="/get_offer">
                            <div class="content-grid-effect slow-zoom vertical">
                                <div class="img-box"><img src="{{ asset('images/10.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                        <h4>Click to get offer!</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
                        <a href="/get_offer">
                            <div class="content-grid-effect slow-zoom vertical">
                                <div class="img-box"><img src="{{ asset('images/9.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                        <h4>Click to get offer!</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach($products as $product)
                        @include('layouts.card')
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>

@endsection


