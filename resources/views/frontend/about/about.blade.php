@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
  <section class="container my-5">
        <div class="row">
          <div class="col-md-12 col-lg-6 mb-3">
            <img
              class="img-fluid rounded-4 shadow"
              src="{{ asset('uploads/aboutUs/' . $about->image) }}"
              alt="Office Desk"
            />
          </div>
          <div class="col-md-12 col-lg-6 about-right brand-text-color ps-3">
            <h4 class="pt-3 pb-3">About Us</h4>
            <p>
              {!!$about->about_us_text!!}
            </p>
            <a href="#" class="btn btn-green m-1 border rounded-pill px-4"
              >Read More</a
            >
          </div>
        </div>
  </section>
    <!-- About end -->
    <!-- Buyers Start -->
    <section class="container py-5 brand-text-color">
      <div class="row">
        <div class="col-md-12 col-lg-6 buyers mb-4">
          <h3>Our Sister Concern</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
            non iaculis est, ac feugiat dui. Nunc sodales rutrum felis ac
            feugiat. Nullam sed commodo arcu. Quisque vel arcu leo.
          </p>
        </div>
        <div class="col-md-12 col-lg-6 sister-logo-about text-center">
          <img class="img-fluid" src="{{asset('asset/images/logo.png')}}" alt="Sister Logo" />
        </div>
      </div>
    </section>
    <!-- Buyers end -->
    <!-- Years Section start -->
    <section class="year brand-text-color">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 experience">
            <img class="img-fluid" src="{{asset('asset/images/17.png')}}" alt="Years" />
            <div class="top-exprience">
              <p>Years <br />experience</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 mission-visition text-end">
            <h5>Our Vision and Mission</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
              non iaculis est, ac feugiat dui. Nunc sodales rutrum felis ac
              feugiat. Nullam sed commodo arcu. Quisque vel arcu leo. Lorem
              ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non
              iaculis est, ac feugiat dui.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Years Section end -->
    <!-- counter start -->
    @include('frontend.track-cards.card')
    <!-- counter end -->
    <!-- history start -->
    <section class="year brand-text-color my-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 experience d-flex align-items-center">
            <img
              class="img-fluid shadow rounded"
              src="{{asset('asset/images/history.png')}}"
              alt=""
            />
          </div>
          <div class="col-sm-12 col-md-6 history text-end">
            <h5 class="my-3">Our History</h5>
            <p>
              Ship Recycling Yards in Bangladesh are located exclusively in an
              area of about 18 kms in length from Fouzdharhat in the south to
              Sonaichori, Baro Aulia in the north in Sitakunda Upazila of
              Chittagong district, only about 8-10 Kilometers north of the
              country’s port city, Chittagong. It is actually an open-air ship
              recycling zone of about half km wide inter-tidal land along the
              seashore, about one to two kilometers west of Dhaka Chittagong
              Highway. <br />
              <br />
                A total of 23 approach roads connected the yards to the national
              highway. The connecting roads are less suitable for vehicular
              movement but are used extensively for movement of heavy Lorries
              carrying bulk goods of the yards and very heavy vehicles like
              bulldozers and cranes. The roads are not well built and are
              damaged due to frequent movement of such heavy vehicles. However,
              the ship breakers usually keep them at running condition by prompt
              repair and filling of holes by scrap bricks and other building
              construction wastes. <br />
              <br />
                Ship Recycling started Chittagong seashore by an accident when
              devastating tidal bore in 1965 drive ashore a 20,000 Ton ship.
              After the independence, Ship recycling started again in 1972 and
              it flourished in the eighties and nineties. Now Ship Breaking is
              an Industry regulated by the government of Bangladesh under
              Bangladesh Ship Recycling Act, 2018 and The Hong Kong
              International Convention, 2009 for the Safe and Environmentally
              Sound Recycling of Ship followed by the Ship Recycling Facility
              Plan (SRFP). <br />
              <br />
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- history end -->
    <!-- Buyers Start -->
    @include('frontend.our-buyers.buyer')
    <!-- Buyers end -->
    <!-- main text -->
    <section class="container">
      <div class="my-4">
         @foreach($about as $m)
        <div class="page-inner-body my-4">
            <p>{!! $m->about_text !!}</p>
        </div>
        @endforeach
      </div>
    </section>

@include('frontend.layout.footer')
@endsection('content')
