@extends('frontend.layouts.main')

@section('title', 'Our Doctors - eHospital')

@section('main-container')
    <!-- Header Section -->
    @include('frontend.layouts.header')

    <!-- Main Content Section -->
    <div class="main-content">
        <!-- Page Title -->
        <section class="page-title" style="background-image: url({{ asset('images/background/doctors-bg.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Doctors</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Doctors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doctors Listing -->
        <section class="doctors-listing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Meet Our Expert Doctors</h2>
                            <p>Our team of highly qualified and experienced medical professionals</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Doctor cards would go here -->
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Section -->
    @include('frontend.layouts.footer')
@endsection