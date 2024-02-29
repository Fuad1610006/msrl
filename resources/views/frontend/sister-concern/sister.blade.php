@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
  <section class="container my-5">
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
      </div>
    </section>
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
          <img class="img-fluid" src="{{asset('asset/images/bsrm.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/madina-logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/RRM-logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/BMSIL-Logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/RSRM-logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/Sarker-Logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/KSRM-Logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/AKS-Logo.png')}}" alt="Buyer Logo" />
          <img class="img-fluid" src="{{asset('asset/images/BS_Logo.png')}}" alt="Buyer Logo" />
          <img
            class="img-fluid"
            src="{{asset('asset/images/transport_logo.png')}}"
            alt=""
          />
        </div>
      </div>
    </section>
    <!-- Buyers end -->
    <!-- main text -->
    <section class="container">
      <div class="my-4">
        <div class="page-inner-title my-4">
          <p>BASIC INFORMATION OF THE COMPANIES</p>
        </div>
        <div class="page-inner-body my-4">
          <div class="py-4">
            <div class="row">
              <div class="col-5">
                <p>
                  Name of the Business (Project) <br />
                  Address:Corporate Office & Yard <br />
                  Nature of the Business <br />
                  Proposed Project <br />
                  Type of Organization <br />
                  Number of Incorporation & Date <br />
                  Authorized Capital in Amount (Face Value: Tk.100/Share) <br />
                  Paid-Up Capital in Amount (Face Value: Tk.100/Share) <br />
                  No.of Shareholders/ Directors <br />
                  Name of Chairman/ Managing Director <br />
                  Trade License Number <br />
                  E-TIN <br />
                  VAT Registration Number/ BIN <br />
                  Fire License No. <br />
                  Environmental Clearance Certificate No. <br />
                  BSBRA Membership  License <br />
                  Chattaogram Chamber of Commerce & Industry (CCCI) Membership
                  No. <br />
                  Board of Investment (BOI) Registration No. <br />
                  Factory Inspection Certificate No. <br />
                  IRC Number <br />
                  ISO Certification: For Ship Recycling Activities, Recyclable
                  Materials Sale, <br />
                  Occupational Health & Safety MGT
                </p>
              </div>
              <div class="col-2">
                : <br />
                : <br />
                : <br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
                :<br />
              </div>
              <div class="col-5">
                MAHINUR SHIP RECYCLING LTD. (MSRL) <br />
                Middle Sonaichari, Shitalpur, Barowlia, Shitakunda,
                Chattogram.<br />
                ShipBreaking & Recycling<br />
                Modernizationof Yard under Ship Recycling Facility Plan
                (SRFP)<br />
                Limitedby Shares (Private Limited Co.)<br />
                CH-11851/2016 02.10.2016<br />
                BDTk.10.00Million<br />
                BDTk.5.00Million<br />
                02(Two)<br />
                Mr.S M Nurun Nabi<br />
                33/2022-23<br />
                477755524974<br />
                002093876-0508<br />
                AD/Chattara/3288-2015-2016<br />
                22-90445(Orange – B)<br />
                2022-23/R-35/77(a)<br />
                M/GEN/36/ 0000276/2022-2023/1386<br />
                <br />
                155/2016/105<br />
                4792/Chattogram<br />
                260315120041820<br />
                ISO-14001: 2015, ISO- 45001:2018, ISO-30000:2009, ISO- 9001:2015
              </div>
            </div>
          </div>
        </div>
        <div class="page-inner-title my-4">
          <p>Availability of NecessarySupport Facilities</p>
        </div>
        <div class="page-inner-body my-4">
          <p>
            ·        Friendly Environment for Operational Work. <br />
            ·        Easy for Beaching of Ships<br />
            ·        Easy Location & Good Communication for delivery<br />
            ·        Adequate Winch & Cutting Instruments<br />
            ·        Yard Building on own land<br />
            ·        Machinery & Equipment- Local & Import<br />
            ·        Spare Parts etc.<br />
            ·        Generator<br />
            ·        Vehicles<br />
            ·        Electricity from PDB<br />
            ·        Water from own Deep Tube well<br />
            ·        Safety Equipment<br />
            ·        Fire Fighting &Extinguisher<br />
            ·        Furniture & Fixtures<br />
            ·        Computer & Other Office Equipment<br />
            ·        Air Conditioner <br />
            ·        Telephone, Internet etc.<br />
          </p>
        </div>
        <div class="page-inner-title my-4">
          <p>CAPITAL STRUCTURE</p>
        </div>
        <div class="page-inner-body my-4">
          <p>
            Authorized Capital               :  100,000Shares x @Tk. 100 = Tk.
            1,00,00,000.00 only <br />
            Paid Up Capital                      :   50,000 Shares   x @Tk. 100
            = Tk. 50,00,000.00 only
          </p>
        </div>
      </div>
    </section>
    
@include('frontend.layout.footer')
@endsection('content')