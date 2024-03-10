<section class="subcribe-bg py-3 subcribe" id="subcribe">
      <div class="container">
        <div
          class="row mx-auto d-flex align-items-center justify-content-between"
        >
          <div class="col-md-3 text-end">
            <h4 class="text-white">Subscribe Now</h4>
          </div>
          <div class="col-md-7 text-start">
            <div class="d-flex">
              <input
                class="sn form-control border rounded-pill"
                placeholder="ex:- admin@email.com"
              />
              <a class="ms-2 btn-subcrib">Subscribe</a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
</section>

<footer class="footer-bg footer text-white" id="footer-mobile">
    <!-- Mega footer -->
    <div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
        <div class="col mb-3">
        <!-- logo -->
        <img
            src="{{ asset('uploads/companyInfo/' . $info->image) }}"
            alt="Footer Logo"
            class="footer-logo"
        />
        <!-- address and icon -->
        <div class="addressnicon my-4">
            <div>
            <i class="fas fa-map-marker-alt pe-2"></i>
            <span>{{ $info->location }}</span>
            </div>
            <div>
            <i class="fas fa-envelope pe-2"></i>
            <span>{{ $info->email_address }}</span>
            </div>
            <div>
            <i class="fas fa-phone pe-2"></i> <span>{{ $info->contact_no }}</span>
            </div>
        </div>
        <!-- social media -->
        <div class="socialicon">
            <a class="btn btn-square btn-light rounded-circle me-1" href="#"
            ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-square btn-light rounded-circle me-1" href="#"
            ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-square btn-light rounded-circle me-1" href="#"
            ><i class="fab fa-youtube"></i
            ></a>
            <a class="btn btn-square btn-light rounded-circle me-1" href="#"
            ><i class="fab fa-linkedin-in"></i
            ></a>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">
        <h3>Who we are</h3>
        <ul>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('about')}}">Mission</a></li>
            <li><a href="{{route('about')}}">Vision</a></li>
            <li><a href="{{route('about')}}">History</a></li>
            <li><a href="#">Achievement</a></li>
        </ul>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">
        <h3>Other Pages</h3>
        <ul>
            <li><a href="{{route('gallery')}}">Gallary</a></li>
            <li><a href="{{route('overview')}}">Industry</a></li>
            <li><a href="{{route('management')}}">Our Team</a></li>
            <li><a href="{{route('sister')}}">Sister Concern</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
        </ul>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">
        <h3>Portfolio</h3>
        <ul>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('chairman')}}">Chairman Message</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            {{-- <li><a href="#">Project 4</a></li>
            <li><a href="#">Project 5</a></li> --}}
        </ul>
        </div>
    </div>
    </div>

    <!-- copyright -->
    <div class="copyright" id="copyright">
    <div class="container pt-2">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p>All rights reserved © MSRLBOB</p>
        </div>
        <div
            class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-end"
        >
            <p>
            Designed & Developed By
            <span
                ><a
                class="fw-bold"
                href="http://muktodharaltd.com/"
                target="_blank"
                >Muktodhara Technology Limited</a
                ></span
            >
            </p>
        </div>
        </div>
    </div>
    </div>
</footer>
