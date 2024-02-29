<header class="sticky-top">
      <!-- top header -->
      <div class="top-header text-end text-white pt-1">
        <div class="container">
          <i class="fas fa-map-marker-alt ps-3 pe-2"></i>
          <span class="fw-light">North Khulshi, Chittagong, Bangladesh</span>
          <i class="fas fa-envelope ps-3 pe-2"></i>
          <span class="fw-light"> info@admin.com </span>
          <i class="fas fa-phone ps-3 pe-2"></i>
          <span class="fw-light"> +880123456789</span>
        </div>
      </div>
      <!-- middle header -->
      <nav class="navbar navbar-expand-sm bg-white navbar-white dektop-nav">
        <div class="container p-0">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">Who we are</a>
              <ul class="sub-nav">
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('chairman')}}">Chairman Message</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('sister')}}">Sister Concern</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('yard')}}">Yard</a>
              <ul class="sub-nav">
                <li><a href="{{route('yard')}}">Modaration of Yard</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('overview')}}">Industry</a>
              <ul class="sub-nav">
                <li><a href="{{route('overview')}}">Ship Breaking Industry</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('track')}}">Our Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('management')}}">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Sister concern -->
      <div class="sister-concern">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="mt-3 ms-5 ps-5 d-flex" id="project-head">
                <a href="#" class="me-3 fw-medium text-nowrap"
                  >Upcoming Project</a
                >
                <a href="#" class="me-3 fw-medium text-nowrap"
                  >Recent Project</a
                >
                <a href="#" class="me-3 fw-medium text-nowrap"
                  >Completed Project</a
                >
              </div>
            </div>
            <div class="col d-flex justify-content-end" id="sister-concern">
              <div class="d-flex">
                <p class="pe-2 my-auto fw-medium text-white text-nowrap">
                  Sister Concern -
                </p>
                <img
                  src="{{asset('asset/images/logo.png')}}"
                  alt="Sister Concern Logo"
                  max-width="50px"
                  class="h-100 my-auto"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Logo -->
      <div class="logo">
        <img
          src="{{asset('asset/images/Mask group.png')}}"
          alt="Logo"
          width="100px"
          class="img-fluid"
        />
      </div>
</header>
   
<section class="brand-bg mobile-nav shadow sticky-top">
      <div class="container py-1">
        <div class="row">
          <div class="col">
            <a href=""
              ><img
                src="{{asset('asset/images/Mask group.png')}}"
                alt="Logo"
                width="100px"
                class="img-fluid"
            /></a>
          </div>
          <div class="col">
            <div class="d-flex justify-content-end">
              <i
                class="bi bi-list cursor-point"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling"
              ></i>
            </div>
          </div>
        </div>
      </div>
      <!-- mobile offnav  -->
      <div
        class="offcanvas offcanvas-start"
        data-bs-scroll="true"
        data-bs-backdrop="false"
        tabindex="-1"
        id="offcanvasScrolling"
        aria-labelledby="offcanvasScrollingLabel"
      >
        <div class="offcanvas-header d-flex justify-content-center">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>

        <ul class="navbar-nav ms-2 mt-2 text-center mobile-nav-view">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cursor-point">Who we are</a>
            <ul class="sub-nav">
              <li><a href="">About Us</a></li>
              <li><a href="">Chairman Message</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="management.html">Sister Concern</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cursor-point">Yard</a>
            <ul class="sub-nav">
              <li><a href="">Modaration of Yard</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link cursor-point">Industry</a>
            <ul class="sub-nav">
              <li><a href="">Ship Breaking Industry</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Our Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border m-3 bg-light" href="{{route('contact')}}"
              >Our All Project</a
            >
          </li>
        </ul>
      </div>
</section>