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
   @include('frontend.track-cards.card')
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
    @include('frontend.our-buyers.buyer')
    <!-- Buyers end -->
    <!-- About start -->
   @include('frontend.about-us.about')
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
