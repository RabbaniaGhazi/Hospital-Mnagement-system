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
</head>
<body>
    <div class="wrapper">
        <!-- Preloader -->
        @include('frontend.layouts.preloader')
        
        <!-- Content -->
        @yield('content')
        
        <!-- JS Files -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Add other JS files here -->
        @stack('scripts')
    </div>
</body>
</html>