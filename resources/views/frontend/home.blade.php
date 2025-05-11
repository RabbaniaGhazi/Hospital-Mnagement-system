@extends('frontend.layouts.main')

@section('title', 'eHospital - Home')

@section('content')
    <!-- Header Section -->
    @include('frontend.layouts.header')
    
    <!-- Main Content Section -->
    <div class="main-content">
        <!-- Hero Slider Section -->
        <section class="hero-slider">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Slider content here -->
                        <div class="main-slider">
                            <div class="slide-item">
                                <img src="{{ asset('images/slider/slide1.jpg') }}" alt="Slide 1">
                                <div class="slide-content">
                                    <h2>Welcome to eHospital</h2>
                                    <p>Your Health is Our Priority</p>
                                    <a href="{{ route('services') }}" class="btn btn-primary">Our Services</a>
                                </div>
                            </div>
                            <!-- Add more slider items as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Our Services</h2>
                            <p>We provide a wide range of medical services to meet your healthcare needs</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <i class="flaticon-ambulance"></i>
                            </div>
                            <h3>Emergency Care</h3>
                            <p>24/7 emergency medical care for serious conditions that require immediate attention.</p>
                        </div>
                    </div>
                    <!-- Service Item 2 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <i class="flaticon-medicine"></i>
                            </div>
                            <h3>Medical Checkup</h3>
                            <p>Comprehensive health assessments to evaluate your overall physical condition.</p>
                        </div>
                    </div>
                    <!-- Service Item 3 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <i class="flaticon-blood-sample"></i>
                            </div>
                            <h3>Laboratory Services</h3>
                            <p>Advanced laboratory testing services for accurate diagnosis and treatment.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('services') }}" class="btn btn-primary">View All Services</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rest of the content sections... -->
        <!-- Doctors Section -->
        <section class="doctors-section bgc-f7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Our Expert Doctors</h2>
                            <p>Meet our highly qualified and experienced medical professionals</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Doctor cards... -->
                    <!-- Doctor 1 -->
                    <div class="col-md-3">
                        <div class="doctor-card">
                            <div class="thumb">
                                <img src="{{ asset('images/doctors/doctor1.jpg') }}" alt="Doctor">
                            </div>
                            <div class="info">
                                <h4>Dr. John Smith</h4>
                                <p>Cardiologist</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Additional doctors... -->
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('doctors') }}" class="btn btn-primary">View All Doctors</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonial-section">
            <!-- Testimonial content... -->
        </section>

        <!-- Appointment Section -->
        <section class="appointment-section bgc-thm">
            <!-- Appointment form... -->
        </section>
    </div>

    <!-- Footer Section -->
    @include('frontend.layouts.footer')
@endsection