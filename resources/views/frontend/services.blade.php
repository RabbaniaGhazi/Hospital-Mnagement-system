@extends('frontend.layouts.main')

@section('title', 'Services - eHospital')

@section('content')
    <!-- Header Section -->
    @include('frontend.layouts.header')
    
    <!-- Main Content Section -->
    <div class="main-content">
        <!-- Page Title -->
        <section class="page-title" style="background-image: url({{ asset('images/background/services-bg.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Services</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services Content -->
        <section class="services-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Our Medical Services</h2>
                            <p>We offer a wide range of medical services to meet the needs of our patients</p>
                        </div>
                    </div>
                </div>
                
                <!-- Services List -->
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-ambulance"></i>
                            </div>
                            <h3>Emergency Care</h3>
                            <p>24/7 emergency medical care for serious conditions that require immediate attention. Our emergency department is equipped with advanced life-saving equipment and staffed by experienced medical professionals.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Service Item 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-heartbeat"></i>
                            </div>
                            <h3>Cardiology</h3>
                            <p>Comprehensive cardiac care including diagnosis, treatment, and management of heart diseases. Our cardiology department offers ECG, echocardiography, stress testing, and other cardiac procedures.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Service Item 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-neurology"></i>
                            </div>
                            <h3>Neurology</h3>
                            <p>Specialized care for disorders of the nervous system, including the brain, spinal cord, and peripheral nerves. Our neurologists diagnose and treat conditions such as stroke, epilepsy, and multiple sclerosis.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Service Item 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-orthopedics"></i>
                            </div>
                            <h3>Orthopedics</h3>
                            <p>Treatment of conditions affecting the musculoskeletal system, including bones, joints, muscles, ligaments, and tendons. Our orthopedic surgeons perform joint replacements, fracture repairs, and sports injury treatments.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Service Item 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-pediatrics"></i>
                            </div>
                            <h3>Pediatrics</h3>
                            <p>Specialized healthcare for infants, children, and adolescents. Our pediatricians provide well-child visits, vaccinations, developmental assessments, and treatment for childhood illnesses and conditions.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Service Item 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="service-box">
                            <div class="icon">
                                <i class="flaticon-laboratory"></i>
                            </div>
                            <h3>Laboratory Services</h3>
                            <p>State-of-the-art diagnostic laboratory offering a wide range of tests for accurate diagnosis and treatment planning. Our lab is equipped with advanced technology and staffed by skilled technicians.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer Section -->
    @include('frontend.layouts.footer')
@endsection