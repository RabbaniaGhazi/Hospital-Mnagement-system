<!-- Footer Section -->
<footer class="footer-style1 bgc-thm">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-widget">
          <div class="ulockd-footer-logo">
            <img src="{{ asset('images/footer-logo.png') }}" alt="Footer Logo">
          </div>
          <p>eHospital is a modern health care facility providing advanced medical care and treatments to patients of all ages.</p>
          <ul class="list-inline ulockd-social-linked">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="footer-widget">
          <h3 class="title">Quick Links</h3>
          <ul class="quick-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('doctors') }}">Doctors</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="title">Our Services</h3>
          <ul class="quick-links">
            <li><a href="#">Emergency Care</a></li>
            <li><a href="#">Outpatient Surgery</a></li>
            <li><a href="#">Cardiac Treatment</a></li>
            <li><a href="#">Diagnostics</a></li>
            <li><a href="#">Laboratory Services</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="title">Contact Info</h3>
          <ul class="contact-info">
            <li><i class="fas fa-map-marker-alt"></i> Your Hospital Address</li>
            <li><i class="fas fa-phone"></i> +1 123 456 7890</li>
            <li><i class="fas fa-envelope"></i> info@ehospital.com</li>
            <li><i class="fas fa-clock"></i> Mon-Sat: 9am-6pm</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ulockd-copy-right">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">© {{ date('Y') }} eHospital. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
