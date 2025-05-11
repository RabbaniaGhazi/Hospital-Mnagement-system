<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ambulance, business, clinic, corporate, creative, dental, doctor, gynecology, health, health care, hospital, medical, medical template, medical theme, retail">
    <meta name="description" content="eHospital - Health Medical HTML Template">
    <meta name="author" content="YourName">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-color.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Title -->
    <title>@yield('title', 'eHospital - Health Care, Medical Hospital & Doctors Clinic')</title>
    
    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Additional styles -->
    @stack('styles')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        
        <!-- Content -->
        @yield('content')
        
        <!-- JS Files -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
       <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <!-- <script src="{{ asset('js/slick.min.js') }}"></script> -->
       <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

         <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery-scrolltofixed.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery.scrolltofixed.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <!-- Add other JS files here -->
        @stack('scripts')
        <script>
             $(document).ready(function() {
        // Hide preloader when page is loaded
        $('.preloader').fadeOut('slow');
            // Failsafe: Force hide preloader after 2 seconds
            setTimeout(function() {
                $('.preloader').fadeOut('slow');
                $('.preloader').remove();
            }, 2000);
          });
        </script>
    </div>
</body>
</html>