<!DOCTYPE html>
<html>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel - Responsive and Modern Car Rental Website Template</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/css_reset.css')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.min.css')}}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/loaders.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
        <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
        
        
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

<body>
	@yield('header')
	@yield('content')
	@yield('footer')
<!-- Scripts project -->
<link rel="stylesheet" href="{{asset('slider/flexslider.css')}}" type="text/css">

<script src="{{asset('slider/jquery.flexslider.js')}}"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
        
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
        <!-- count -->
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js')}}"></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="{{ asset('js/idangerous.swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/equalHeightsPlugin.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.datetimepicker.full.min.js')}}"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/index.js')}}"></script>

</body>
</html>