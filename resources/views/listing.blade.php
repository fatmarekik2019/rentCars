@extends('template.layout')
@section('header')
    @include('template.inc.header')
@endsection
@section('content')

	<div class="prosuct-wrap">
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-sm-8">
                        <header class="wheel-header marg-lg-t25 marg-lg-b65">
                            <h3>Search vehicles for your location -<span> Australia</span></h3>
                        </header>
                    </div>
                    <div class="col-sm-4">
                        <div class="select select-4 wheel-select-w100 marg-lg-t10 marg-lg-b65 marg-sm-b30">
                            <span class="">Australia</span>
                            <ul class="list">
                                <li>Australia</li>
                                <li>United States</li>
                                <li>United Kingdom</li>
                                <li>Ukraine</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-1">
                            <span class="">All category</span>
                            <ul class="list">
                                <li>All category</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-2">
                            <span class="">All brands</span>
                            <ul class="list">
                                <li>All brands</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-3">
                            <span class="">Any price </span>
                            <ul class="list">
                                <li>Any price</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="wheel-car-list-btn">
                            <a href="" class="fa fa-th-list active" data-list='product-elem-style1'></a>
                            <a href="" class="fa fa-th" data-list='product-elem-style2'></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container padd-lr0 xs-padd">
                <div class="product-list product-list2 wheel-bgt clearfix">
                    <div class="row">
                    	@foreach($cars as $car)
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                  
                                        <div class="flexslider">
                                            <ul class="slides">
                                    	@foreach($car->photos as $photo)

                                        <li><img src="{{asset($photo->link)}}" alt="img" class="img-responsive" height="500px"></li>
                                        @endforeach
                                    </ul>
                                </div>
                                   
                                </div>
                                
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
										
                                        <div class="title">
										{{$car->categories->marque}}
                                        	{{$car->model}}</div>
                                        <div class="price-wrap product-cell">
                                            <span>${{$car->prix}}</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i40.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>{{$car->nombre_places}} seats</li>
                                            <li>{{$car->couleur}}</li>
                                            <li>{{$car->carburant}}</li>
                                            <li>{{$car->puissance}} CV</li> 
                                        </ul>

                                        <div class="wheel-view-link">
                                            <a href="">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                       
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0 text-center">
                        <div class="wheel-page-pagination marg-lg-t60 marg-lg-b25  ">
                            <a class="prev page-numbers fa fa-arrow-left" href="#"></a>
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="next page-numbers fa fa-arrow-right" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="wheel-quote text-center">
            <img src="images/bg3.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                        <div class="swiper-outer-left fa fa-angle-left"></div>
                        <div class="swiper-outer-right fa fa-angle-right"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-quote-partners">
                            <a href=""><img src="images/p1.png" alt=""></a>
                            <a href=""><img src="images/p2.png" alt=""></a>
                            <a href=""><img src="images/p3.png" alt=""></a>
                            <a href=""><img src="images/p4.png" alt=""></a>
                            <a href=""><img src="images/p5.png" alt=""></a>
                            <a href=""><img src="images/p6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('footer')
        @include('template.inc.footer')
@endsection
