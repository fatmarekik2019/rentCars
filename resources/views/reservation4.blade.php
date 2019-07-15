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
                            <li class="title-wrap ">
                                <div class="title">
                                    <span>3.</span>Choose your options
                                </div>
                            </li>
                            <li class="title-wrap active">
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
        @if(Session::has('message'))
            <h4>{{Session::get('message')}}</h4>
            @endif
        <div class="product-wrap">
            <!-- ////////////////////////////////////////// -->
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-xs-12 pad-r col-md-6">

                            <form action="{{route('handleAddBooking')}}" method="POST">
                            @csrf
                        <div class="headlines1">
                            personal info
                        </div>
                        <div class="form-2 marg-lg-b25">
                        	@foreach($cars as $car)
                            <input type="text" class="f-input" placeholder="First Name *" name="Firstname">
                            <input type="text" class="f-input f-right" placeholder="Last Name *" name="Lastname">
                            <input type="text" class="f-input" placeholder="Phone *" name="telephone">
                            <input type="text" class="f-input f-right" placeholder="Email *" name="email">
                            <input type="text" class="f-input" placeholder="cin *" name="cin">
                            <input type="text" class="f-input f-right" placeholder="Numéro permis *" name="numero_permis">
                            <input type="text" class="f-input" placeholder="age *" name="age">
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <input type="hidden" name="date_depart" value="{{$dateDepart}}">
                            <input type="hidden" name="date_retour" value="{{$dateRetour}}">
                            <label>
                            
                        </div>
 						
                        <div class="headlines1">
                            Your order
                        </div>
                        <ul class="order clearfix marg-lg-b40 marg-xs-b10">
                            <li class="item clearfix">
                                <div class="title">{{$car->categories->marque}} {{$car->model}} <span>({{$car->prix}}.00 x 2 Days)</span></div>
                                <span>$108.00</span>
                            </li>
                            
                        </ul>
                        <div class="payment">
                            <div class="headlines1">
                                Payment method
                            </div>
                            <input name="pay" id="pay1" type="radio" value="1" checked>
                            <label for="pay1">Pay at Rental Counter</label>
                            <input name="pay" id="pay2" type="radio" value="2">
                            
                            <div class="total clearfix">
                                <div class="title">Estimated Total</div>
                                <div class="price">$178.00</div>
                            </div>
                            <div class="agree">
                                <input type="checkbox" class="input-check" value="yes">
                                I agree with the <a href="#">Terms and Conditions</a>
                            </div>
                            
                            <button class="wheel-btn" style="margin-left: 30px">BOOK IT NOW</button>
                            </form>
                       
                        </div>
                    </div>
                    <div class="col-xs-12 pad-l col-md-6">
                    	
                        <div class="r-return-block type-2">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <h5 class="title">Pick-up</h5>
                            <div class="date">{{$dateDepart}}</div>
                        </div>
                        <div class="r-return-block type-2">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <h5 class="title">Return</h5>
                            <div class="date">{{$dateRetour}}</div>
                        </div>
                        <div class="r-return-block type-2 style-2">
                            <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <div class="img-wrap">
                                @foreach($car->photos as $photo)
                                        <img src="{{asset($photo->link)}}" alt="img" class="img-responsive">
                                @endforeach
                            </div>
                        </div>
                        <div class="r-return-block type-2 style-3">
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
                        
                         @endforeach
                    </div>
                </div>
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