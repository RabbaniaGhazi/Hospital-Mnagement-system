<!-- Header Section -->
<header class="header-style1">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-info">
                        <ul>
                            <li><i class="fas fa-phone"></i> +1 123 456 7890</li>
                            <li><i class="fas fa-envelope"></i> info@ehospital.com</li>
                            <li><i class="fas fa-map-marker-alt"></i> Your Hospital Address</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-links text-right">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header-right">
                        <div class="header-info-box">
                            <div class="icon-box">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="text-box">
                                <h5>Working Hours</h5>
                                <p>Mon-Sat: 9am-6pm</p>
                            </div>
                        </div>
                        <div class="header-info-box">
                            <div class="icon-box">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text-box">
                                <h5>Call Us</h5>
                                <p>+1 123 456 7890</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation Bar -->
    <div class="navbar-style1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item {{ Request::routeIs('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="nav-item {{ Request::routeIs('services') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item {{ Request::routeIs('doctors') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('doctors') }}">Doctors</a>
                                </li>
                                <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>