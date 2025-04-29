@extends('layouts.app')

@section('title', 'HMS - Home')

@section('content')
<section class="banner-home p0">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-banner-wrapper home1_style">
                    <div class="banner-style-one owl-theme owl-carousel" data-autoplay="true" data-items="1" data-active="true">
                        <div class="slide slide-one" style="background-image: url({{ asset('images/home/1.jpg') }}); height: 700px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center"><span class="tag-line">Welcome To <span
                                                class="text-thm1">Shadman Clinic</span></span>
                                        <h3 class="banner-title">Your Health Care <span class="text-thm1">Center</span></h3>
                                        <p>Medical Services provides routine and urgent medical care, travel medicine, <br>
                                            sexual health services, gynecological and confidential HIV testing</p>
                                        <div class="btn-block"><a href="#" class="banner-btn btn-thm">Get A Quote</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide-one" style="background-image: url({{ asset('images/home/3.jpg') }}); height: 700px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center"><span class="tag-line">Best Care Service</span>
                                        <h3 class="banner-title">Your Satisfaction Our <span class="text-thm1">Goal</span></h3>
                                        <p>Medical Services provides routine and urgent medical care, travel medicine, <br>
                                            sexual health services, gynecological and confidential HIV testing</p>
                                        <div class="btn-block"><a href="#" class="banner-btn btn-thm">Get A Quote</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide-one" style="background-image: url({{ asset('images/home/2.jpg') }}); height: 700px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center"><span class="tag-line">Health Care Service</span>
                                        <h3 class="banner-title">Best Service From Us</h3>
                                        <p>Medical Services provides routine and urgent medical care, travel medicine, <br>
                                            sexual health services, gynecological and confidential HIV testing</p>
                                        <div class="btn-block"><a href="#" class="banner-btn btn-thm">Get A Quote</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow"></i></span>
                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<li class="nav-item dropdown"> 
    <a href="#" class="nav-link" data-toggle="modal" data-bs-target="#exampleModal">Login</a>
</li>
<nav id="menu" class="stylehome1">
    <ul>
        <li><span>Home Pages</span>
        </li>
    </ul>
</nav>
@endsection

@section('scripts')
<script>
        // Include any specific JavaScript needed for this page. 
        $(document).ready(function() {
            $('.banner-style-one').owlCarousel({
                items: 1,
                autoplay: true,
                loop: true,
                nav: true,
                dots: false,
            });
        });
    </script>
@endsection