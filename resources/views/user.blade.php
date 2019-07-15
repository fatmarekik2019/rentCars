@extends('template.layout')
@section('header')
    @include('template.inc.header')
@endsection
@section('content')

<!-- //////////////////////////////// -->
<div style="height: 100px"></div>

   <div class="wheel-register-block">
    	<div class="container">
                <div class="row">

                    <div class="col-md-5 padd-l0"=>
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100" style="height: 500px">
                            <div class="wheel-header">
                                <h5>Add Brand</h5>
                            </div>
                            <form action="{{route('handleAddCategory')}}" method="POST">
                                        @csrf
                                        <label for="brand"><span>Brand</span>
                                        <input type="text" id="brand" name="marque">
                                        </label>
                                        <button class="wheel-btn">Add</button>
                                    </form>
                            
                        </div>
                    </div>
               
                    
                    

            
        <!-- ////////////////////////////////////////// -->
        <div class="col-md-7 padd-r0">
            <div class="wheel-register-sign marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Add a car </h5>
                                
                            </div>
                            <form action="{{route('handleAddCar')}}" method="POST">
                            	@csrf
                               <input type="text" placeholder="Model" name="model" required>
                                <input type="text" placeholder="Matricule" name="matricule" required>
                                <input  type="text" placeholder="Price" name="prix" required>
                                <input  type="text" placeholder="color" name="couleur">
                                <input  type="text" placeholder="puissance" name="puissance">
                                <input  type="text" placeholder="carburant" name="carburant">
                                <input  type="text" placeholder="seats" name="seats">
                                
								
								<select name="category_id" style="width: 50%; height: 60px; border: 1px solid #e5e0e0">
                                        	@foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->marque}}</option>
                                            @endforeach
                                </select>
                            <div style="height: 50px"></div>
                                <button class="wheel-btn">Add</button>
                            </form>
                        </div>     
            </div>
       

    	

        
                        <!-- ////////////////////////////////////////// -->
                    <div class="col-md-10 offset-md-1 padd-l0" style="margin-top: -150px;">
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Add a photo</h5>
                            </div>
                            <form action="{{route('handleAddPhotos')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <label for="brand" style="width: 100%">
                                        <select name="car_id" id="brand" style="width: 100%; height: 60px; border: 1px solid #e5e0e0">
                                        	@foreach($cars as $car)
                                            <option value="{{$car->id}}">{{$car->model}}</option>
                                            @endforeach
                                        </select>
                                        </label>
                                        <input type="file" placeholder="Photo" name="photo[]" multiple>
                                        <button class="wheel-btn">Add</button>
                                    </form>
                            
                        </div>
                    </div>

                        <!-- ////////////////////////////////////////// -->
                    <div class="col-md-10 offset-md-1 padd-l0" style="margin-top: -150px;">
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Validate the bookings </h5>
                            </div>
                            <table>
                            	<thead>
                            		<tr>
                            			<th>Booking Id</th>
                            			<th>Customer</th>
                            			<th>Car</th>
                            			<th>Pick up</th>
                            			<th>Return</th>
                            			<th>action</th>
                            		</tr>
                            	</thead>
                            	@foreach($val as $c)
                            	<tr>
                            		<td>{{$c->id }}</td>
                            		<td>{{$c->customers->Firstname }} {{$c->customers->Lastname }}</td>
                            		<td>{{$c->cars->categories->marque }} {{$c->cars->model }}</td>
                            		<td>{{$c->date_depart }}</td>
                            		<td>{{$c->date_retour }}</td>
                            		<td>{{$c->validation }}</td>

                            		<td><a class="wheel-btn" href="{{route('Validation', ['booking_id'=>$c->id])}}">Validate</a></td>
                            	</tr>
                            	@endforeach
                            </table>
                            
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
        <!-- ////////////////////////////////////////// -->
        

@endsection

@section('footer')
        @include('template.inc.footer')
@endsection
