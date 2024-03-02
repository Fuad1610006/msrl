@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
    <section class="container-fluid px-0 mx-0 mt-0">
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
              <div class="carousel-item active h-100">
                <img
                  src="{{asset('asset/images/carousel-image.png')}}"
                  class="d-block h-100"
                  alt="Carousel Image"
                />
                <div class="carousel-caption">
                  <div class="text-start">
                    <p class="slider-one-heading mb-0">Welcome To</p>
                    <h2 class="slider-two-heading text-uppercase">
                      Mahinur Ship Recycling Ltd.
                    </h2>
                    <p class="py-3 slider-text">
                      Mahinur Ship Recycling Limited (here in after referred as
                      “MSRL” or the company) was incorporated on 02.10.2016 vide
                      Registration No. CH-11851/2016 asa Private Limited Company
                      under the Companies Act (Act XVIII) of 1994. The company is
                      also engaged in importing and dismantling of scrap vessel.
                    </p>
                  </div>
                  <div class="d-flex justify-content-between me-auto">
                    <a href="#" class="btn btn-white m-1 border rounded-pill px-4"
                      >About Us</a
                    >
                    <a href="#" class="btn btn-green m-1 border rounded-pill px-4"
                      >Project</a
                    >
                  </div>
                </div>
              </div>
              <div class="carousel-item h-100">
                <img
                  src="{{asset('asset/images/carousel-image.png')}}"
                  class="d-block h-100"
                  alt="Carousel Image"
                />
                <div class="carousel-caption">
                  <div class="text-start">
                    <p class="slider-one-heading mb-0">Welcome To</p>
                    <h2 class="slider-two-heading text-uppercase">
                      Mahinur Ship Recycling Ltd.
                    </h2>
                    <p class="py-3 slider-text">
                      Mahinur Ship Recycling Limited (here in after referred as
                      “MSRL” or the company) was incorporated on 02.10.2016 vide
                      Registration No. CH-11851/2016 asa Private Limited Company
                      under the Companies Act (Act XVIII) of 1994. The company is
                      also engaged in importing and dismantling of scrap vessel.
                    </p>
                  </div>
                  <div class="d-flex justify-content-between me-auto">
                    <a href="#" class="btn btn-white m-1 border rounded-pill px-4"
                      >About Us</a
                    >
                    <a href="#" class="btn btn-green m-1 border rounded-pill px-4"
                      >Project</a
                    >
                  </div>
                </div>
              </div>
              <div class="carousel-item h-100">
                <img
                  src="{{asset('asset/images/carousel-image.png')}}"
                  class="d-block h-100"
                  alt="Carousel Image"
                />
                <div class="carousel-caption">
                  <div class="text-start">
                    <p class="slider-one-heading mb-0">Welcome To</p>
                    <h2 class="slider-two-heading text-uppercase">
                      Mahinur Ship Recycling Ltd.
                    </h2>
                    <p class="py-3 slider-text">
                      Mahinur Ship Recycling Limited (here in after referred as
                      “MSRL” or the company) was incorporated on 02.10.2016 vide
                      Registration No. CH-11851/2016 asa Private Limited Company
                      under the Companies Act (Act XVIII) of 1994. The company is
                      also engaged in importing and dismantling of scrap vessel.
                    </p>
                  </div>
                  <div class="d-flex justify-content-between me-auto">
                    <a href="#" class="btn btn-white m-1 border rounded-pill px-4"
                      >About Us</a
                    >
                    <a href="#" class="btn btn-green m-1 border rounded-pill px-4"
                      >Project</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <ol class="carousel-indicators">
              <li
                data-bs-target="#myCarousel"
                data-bs-slide-to="0"
                class="active"
              ></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>
          </div>
    </section>
    <!-- slider end -->
    <!-- counter and Chairman start -->
    <section class="brand-bg" id="slider-zindex">
      <!-- backgroud image -->
      <div class="middle-bg">
        <!-- counter start -->
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="counter-title brand-text-color">
                  Track Record of Scrap Ship Import
                </h2>
                <p class="counter-text brand-text-color mt-2">
                  The companies are mainly engaged in importing & breaking the
                  old scrap vessels, cutting the MS Plates. The company offers
                  its products to the domestic market in the Re-rolling Mills.
                  Existing cutting capacity per year of PTCL & MSRL each is
                  around 10 (Ten) Scrap Vessel at a time having average capacity
                  of 10,000 M.T. After modernization the capacity will be
                  increased to15,000 M.Ton per ship.
                </p>
                <a href="#" class="project-btn cursor-point">Project</a>
              </div>
              <div class="col-sm-5" id="counter-mobile">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="bg-white shadow text-center p-4 rounded-4 mb-3">
                      <h3 class="brand-text-color">89</h3>
                      <p class="brand-text-color">Total Import</p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-white shadow text-center p-4 rounded-4 mb-3">
                      <h3>89</h3>
                      <p>Total Import</p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-white shadow text-center p-4 rounded-4 mb-3">
                      <h3>89</h3>
                      <p>Total Import</p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-white shadow text-center p-4 rounded-4 mb-3">
                      <h3>89</h3>
                      <p>Total Import</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- counter end -->
        <!-- chairman start -->
        <div class="chairman">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-6 chairman-image">
                <img
                  src="{{asset('asset/images/chairman-image.png')}}"
                  alt="Chairman"
                  class="img-fluid"
                />
                <!-- designation -->
                <div class="designation text-white p-2 mt-5 w-75">
                  <h5 class="pb-2">Mr. S M Nurun Nabi</h5>
                  <p>Chairman</p>
                </div>
              </div>
              <div
                class="col-md-12 col-lg-6 d-flex align-items-center mt-3 pb-4"
              >
                <div>
                  <h2 class="chairman-title">Chairman Message</h2>
                  <p class="chairman-text mb-4">
                    I welcome you on behalf of the MAHINUR SHIP RECYCLING LTD
                    (MSRL) and thank you for showing your interest in us. MSRL
                    is positioned to play a crucial role to building structural
                    materials in Bangladesh. You will be happy to know that
                    Shipbreaking plays an important role in the national economy
                    for several reasons. MSRL is proud for the part of one.
                  </p>
                  <a href="/" class="unknown-btn"> &lt; Read More &gt; </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Chairman end -->
      </div>
    </section>
    <!-- counter and Chairman end -->
    <!-- Buyers Start -->
    <section class="container py-5 brand-text-color">
      <div class="row">
        <div class="col-md-12 col-lg-6 buyers mb-4">
          <h3>Our Prospective Buyers</h3>
          <p>
            MSRL has na existing and reliable customer base. The list of the
            major buyers.
          </p>
        </div>
        <div class="col-md-12 col-lg-6 buyers-logo text-center">
          <img class="img-fluid" src="{{asset('asset/images/bsrm.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/madina-logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/RRM-logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/BMSIL-Logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/RSRM-logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/Sarker-Logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/KSRM-Logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/AKS-Logo.png')}}" alt="Buyers Logo" />
          <img class="img-fluid" src="{{asset('asset/images/BS_Logo.png')}}" alt="Buyers Logo" />
          <img
            class="img-fluid"
            src="{{asset('asset/images/transport_logo.png')}}"
            alt="Buyers Logo"
          />
        </div>
      </div>
    </section>
    <!-- Buyers end -->
    <!-- About start -->
    <section class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6 mb-3">
          <img
            class="img-fluid rounded-4 shadow"
            src="{{asset('asset/images/office.jpg')}}"
            alt="Office Desk"
          />
        </div>
        <div class="col-md-12 col-lg-6 about-right brand-text-color ps-3">
          <h4 class="pt-3 pb-3">About Us</h4>
          <p>
            Mahinur Ship Recycling Limited (here in after referred as “MSRL” or
            the company) was incorporated on 02.10.2016 vide Registration No.
            CH-11851/2016 asa Private Limited Company under the Companies Act
            (Act XVIII) of 1994. The company is also engaged in importing and
            dismantling of scrap vessel.   Premium Trade Corporation Limited
            (here in after referred as “BOB Recycles” or the company) was
            incorporated on 17 May, 2012 vide Registration No. CH-9663/12 as a
            Private Limited Company under the Companies Act (Act XVIII) of 1994.
            The company is engaged in importing and dismantling of scrap vessel.
          </p>
          <a href="#" class="btn btn-green m-1 border rounded-pill px-4"
            >Read More</a
          >
        </div>
      </div>
    </section>
    <!-- About end -->
    <!-- Galary start -->
    <section class="container py-5 brand-text-color" id="galary">
      <div class="row mb-4">
        <div class="col-sm-6 galary-text">
          <a class="brand-text-color" href="galary.html">
            <h4>Image Gallery</h4>
          </a>
        </div>
        <div
          id="project-galary-btn"
          class="col-sm-6 image-catary d-flex align-items-center justify-content-end"
        >
          <a href="#">All</a>
          <a href="#">Corporate</a>
          <a href="#">Project</a>
        </div>
      </div>
      <!-- galary image -->
      <div class="row galary-img">
        <div class="col-sm-12 col-md-6 col-lg-3 cursor-point">
          <img
            class="img-fluid rounded"
            src="{{asset('asset/images/ship.png')}}"
            alt="Ship"
            onclick="openModal('{{asset('asset/images/ship.png')}}"
          />
          <p>MV. Sino Ocean</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 cursor-point">
          <img
            class="img-fluid rounded"
            src="{{asset('asset/images/ship.png')}}"
            alt="Ship"
            onclick="openModal('{{asset('asset/images/ship.png')}}"
          />
          <p>MV. Sino Ocean</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 cursor-point">
          <img
            class="img-fluid rounded"
            src="{{asset('asset/images/ship.png')}}"
            alt="Ship"
            onclick="openModal('{{asset('asset/images/ship.png')}}"
          />
          <p>MV. Sino Ocean</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 cursor-point">
          <img
            class="img-fluid rounded"
            src="{{asset('asset/images/ship.png')}}"
            alt="Ship"
            onclick="openModal('{{asset('asset/images/ship.png')}}"
          />
          <p>MV. Sino Ocean</p>
        </div>
      </div>
      <!-- view Modal -->
      <div id="modal" class="modal" onclick="closeModal()">
        <img id="modalImage" class="modal-content" alt="Modal Image" />
      </div>
    </section>

@include('frontend.layout.footer')
@endsection('content')