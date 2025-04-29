<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
    content="ambulance, business, clinic, corporate, creative, dental, doctor, gynecology, health, health care, hospital, medical, medical template, medical theme, retail">
    <meta name="description" content="Shadman Clinic - Health Medical HTML Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HMS - Home')</title>
    
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="social-linked">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fas fa-rss"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item">
                                    <p class="ulockd-welcntxt">Phone<span class="text-thm1"> +98-9875-5968-54</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="welcm-ht text-center">
                            <p class="ulockd-welcntxt">Welcome To Our<span class="text-thm1"> Service</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="welcm-ht text-end">
                            <ul>
                                <li class="list-inline-item"><a class="color-white" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign In | Sign Up</a></li>
                                <!-- Add your modal for login here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ulockd-contact-info text-end tac-sm">
                            <div class="ulockd-icon float-end"><span class="flaticon-map-marker"></span></div>
                            <div class="ulockd-info">
                                <h3>Location</h3>
                                <p class="ulockd-cell">your location here</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ulockd-welcm-hmddl text-center"><a href="index.html" class="ulockd-main-logo"><img src="images/header-logo.png" alt=""></a></div>
                    </div>
                    <div class="col-md-4">
                        <div class="ulockd-ohour-info tac-sm">
                            <div class="ulockd-icon float-start"><span class="flaticon-clock-1"></span></div>
                            <div class="ulockd-info">
                                <h3>Opening Hour</h3>
                                <p class="ulockd-addrss">Sat-Thi 9:00-20:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <!-- Our Footer -->
	<section class="ulockd-footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-6 col-lg-3">
	        <div class="footer-about-widget"> <img alt="" src="images/footer-logo.png" class="img-fluid ulockd-footer-log">
	          <p class="ulockd-ftr-text my-3">eHospital is the Rockies is a 710-bed local medicinal focus in Loveland, Colo. with a full range of administrations and spend significant time in heart and injury mind.</p>
	        </div>
	        <div class="footer-newsletter-widget">
	          <h4 class="title text-uppercase">News Letter</h4>
	          <form class="ulockd-mailchimp">
	            <div class="input-group">
	              <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
	              <span class="input-group-btn">
	              <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
	              </span>
	            </div>
	          </form>
	        </div>
	      </div>
	      <div class="col-sm-6 col-lg-3">
	        <div class="footer-lnews-widget">
	          <h3 class="text-uppercase">Latest Ne<span class="text-thm1">ws</span></h3>
	          <div class="ulockd-media-box">
	            <div class="d-flex">
							  <div class="flex-shrink-0">
							    <img class="mr-3" src="images/blog/s1.jpg" alt="s1.jpg">
							  </div>
							  <div class="flex-grow-1 ms-3">
	              	<a href="#" class="post-date">21 January, 2022</a>
	                <h4 class="title">Let's Move Blog</h4>
	                <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
	            <div class="d-flex">
							  <div class="flex-shrink-0">
							    <img class="mr-3" src="images/blog/s2.jpg" alt="s1.jpg">
							  </div>
							  <div class="flex-grow-1 ms-3">
	              	<a href="#" class="post-date">21 January, 2022</a>
	                <h4 class="title">Let's Move Blog</h4>
	                <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-6 col-lg-2">
	        <div class="footer-qlink-widget">
	          <h3 class="text-uppercase">NAVIGATI<span class="text-thm1">ON</span></h3>
	          <ul class="list-unstyled">
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> About Us</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Appointment</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Help Center</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Our Services</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Sitemap</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Team Details</a></li>
	            <li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Contact Us</a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="col-sm-6 col-lg-4">
	        <div class="footer-flickr-widget">
	          <h3 class="text-uppercase">Flickr Fe<span class="text-thm1">ed</span></h3>
	          <div class="col-sm-6 col-lg-4">
            <div class="footer-flickr-widget">
              <h3 class="text-uppercase">Flickr Fe<span class="text-thm1">ed</span></h3>
              <ul>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr1.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr2.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr3.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr4.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr5.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="thumb"> <img alt="" src="{{ asset('images/gallery/flckr6.jpg') }}" class="img-fluid img-whp thumbnail">
                    <div class="overlay"> <span class="flaticon-add"></span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    </footer>

    <!-- JavaScript files -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    
    @yield('scripts')
</body>
</html>