@extends('template.layout')
@section('header')
    @include('template.inc.header')
@endsection
@section('content')

<!-- //////////////////////////////// -->
       <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Reservation</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Reservation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="step-wrap">
            <!-- ////////////////////////////////////////// -->
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <ul class="steps">
                            <li class="title-wrap ">
                                <div class="title">
                                    <span>1.</span>Make a reservation
                                </div>
                            </li>
                            <li class="title-wrap ">
                                <div class="title">
                                    <span>2.</span>Select your car
                                </div>
                            </li>
                            <li class="title-wrap active">
                                <div class="title">
                                    <span>3.</span>Choose your options
                                </div>
                            </li>
                            <li class="title-wrap ">
                                <div class="title">
                                    <span>4.</span>Information & review
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ////////////////////////////////////////// -->
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="product-wrap">
            <!-- ////////////////////////////////////////// -->
            <div class="container marg-lg-b60 marg-xs-b40">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                        <div class="r-return-block ">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <h5 class="title">Pick-up</h5>
                            <div class="date">{{$dateDepart}}</div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                        <div class="r-return-block ">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <h5 class="title">Return</h5>
                            <div class="date">{{$dateRetour}}</div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                	 @foreach($cars as $car)
                    <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                        <div class="r-return-block style-2">
                            <div class="img-wrap">
                                @foreach($car->photos as $photo)
                                        <img src="{{asset($photo->link)}}" alt="img" class="img-responsive">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                        <div class="r-return-block style-3">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <div class="text-wrap">
                                <div class="t-title">{{$car->categories->marque}} {{$car->model}}</div>
                                
                                <ul class="metadata">
                                    <li>{{$car->nombre_places}} seats</li>
                                    <li>{{$car->couleur}}</li>
                                    <li>{{$car->carburant}}</li>
                                    <li>{{$car->puissance}} CV</li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row marg-lg-t60 marg-xs-t30">
                    <div class="col-md-6 padd-lr0">
                                    <form action="{{route('handleConfirmationBooking', ['car_id'=>$car->id, 'dateDepart'=>$dateDepart, 'dateRetour'=>$dateRetour])}}" method="GET">

                                        <input type="submit" value="CONTINUE">
                                        
                                    </form>
                                </div>
                </div>
                @endforeach
            </div>
            <!-- ////////////////////////////////////////// -->
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
        <!-- ////////////////////////////////////////// -->
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