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
                            <li class="title-wrap active">
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
        <div class="reservation">
            <div class="container padd-lr0 marg-lg-t100 marg-lg-b100 marg-xs-t0 marg-xs-b0">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <!-- ////////////////////////////////////////// -->
                        <div class="wheel-start-form wheel-start-form2">
                            <form action="{{route('reservation2')}}" method="POST">
                            @csrf
                                <label><span>Brand</span>
                                <select name="category_id" style="width: 50%; height: 60px; border: 1px solid #e5e0e0">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->marque}}</option>
                                            @endforeach
                                </select>
                                </label>
                                <label for="input-val21"><span>Price</span>
                                <input type="text" id=input-val21 placeholder="Price" name="prix" required>
                                </label>
                                <div class="clearfix">
                                    <div class="wheel-date">
                                        <span>Pickup Date</span>
                                        <label class="fa fa-calendar" for="input-val22">
                                        <input  class="datetimepicker" type="text" id=input-val22 name="date_depart">
                                        </label>
                                    </div>
                                    <div class="wheel-date ">
                                        <span>Pickup time</span>
                                        <label for="input-val23" class="fa fa-clock-o">
                                        <input class="timepicker" type="text" id=input-val23 value="18:00">
                                        </label>
                                    </div>
                                    <div class="wheel-date">
                                        <span>Return Date</span>
                                        <label class="fa fa-calendar" for="input-val24">
                                        <input  class="datetimepicker" type="text" id=input-val24 name="date_retour">
                                        </label>
                                    </div>
                                    <div class="wheel-date">
                                        <span>Return Time</span>
                                        <label for="input-val25" class="fa fa-clock-o">
                                        <input class="timepicker" type="text" id='input-val25' value="18:00">
                                        </label>
                                    </div>
                                    <div class="wheel-date">
                                        <span>Driver’s Age</span>
                                        <select class="selectpicker">
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                            <option>32</option>
                                            <option>33</option>
                                            <option>34</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>42</option>
                                            <option>43</option>
                                            <option>44</option>
                                            <option>45</option>
                                            <option>46</option>
                                            <option>47</option>
                                            <option>48</option>
                                            <option>49</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="wheel-date">
                                        <span>Resident</span>
                                        <select class="selectpicker">
                                            <option>USA</option>
                                            <option>UA</option>
                                            <option>UK</option>
                                            <option>AU</option>
                                            <option>LT</option>
                                            <option>JP</option>
                                            <option>IT</option>
                                        </select>
                                    </div>
                                    <label for="input-val26" class="promo">

                                    <input type="text"  placeholder="Promo Code (Optional)">
                                    </label>
                                   
                                    <button class="wheel-btn" style="margin-left: 30px">Search</button>

                                </div>
                            </form>
                        </div>
                        <!-- ////////////////////////////////////////// -->
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
