@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

<div class="container-fluid px-0 mx-0">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('asset/images/carousel-image.png')}}" class="d-block w-100 h-100" alt="Carousel Image">
        <div class="carousel-caption">
         <div class="left-text">
         <h4>Welcome To</h4>
            <h2 class="text-uppercase">Mahinur Ship Recycling Ltd.</h2>
            <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore et sunt inventore repellendus pariatur saepe, error fugit. Cumque quasi perspiciatis doloremque officiis. Quae, necessitatibus labore impedit ullam ratione aliquam nostrum.</p>
          </div>
          <div class="d-flex justify-content-between me-auto">
            <a href="#" class="btn btn-white m-1 border rounded-pill px-4">About Us</a>
            <a href="#" class="btn btn-green m-1 border rounded-pill px-4">Project</a>
           </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{asset('asset/images/carousel-image.png')}}" class="d-block w-100 h-100" alt="Carousel Image">
        <div class="carousel-caption">
         <div class="left-text">
         <h4>Welcome To</h4>
            <h2 class="text-uppercase">Mahinur Ship Recycling Ltd.</h2>
            <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore et sunt inventore repellendus pariatur saepe, error fugit. Cumque quasi perspiciatis doloremque officiis. Quae, necessitatibus labore impedit ullam ratione aliquam nostrum.</p>
          </div>
          <div class="d-flex justify-content-between me-auto">
            <a href="#" class="btn btn-white m-1 border rounded-pill px-4">About Us</a>
            <a href="#" class="btn btn-green m-1 border rounded-pill px-4">Project</a>
           </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{asset('asset/images/carousel-image.png')}}" class="d-block w-100 h-100" alt="Carousel Image">
        <div class="carousel-caption">
         <div class="left-text">
         <h4>Welcome To</h4>
            <h2 class="text-uppercase">Mahinur Ship Recycling Ltd.</h2>
            <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore et sunt inventore repellendus pariatur saepe, error fugit. Cumque quasi perspiciatis doloremque officiis. Quae, necessitatibus labore impedit ullam ratione aliquam nostrum.</p>
          </div>
          <div class="d-flex justify-content-between me-auto">
            <a href="#" class="btn btn-white m-1 border rounded-pill px-4">About Us</a>
            <a href="#" class="btn btn-green m-1 border rounded-pill px-4">Project</a>
           </div>
        </div>
      </div>
    </div>

    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>

  </div>
</div>


<section class="chairman bg-2">
  <div class="container">
    <!-- First Row -->
    <div class="row">
      <!-- Left side with heading, text, and button -->
      <div class="col-md-6 upper-left py-5">
        <h2>Track Record of Scrap Ship Import</h2>
        <p>Some text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn btn-success">Project</button>
      </div>
      <!-- Right side with background image of screws and cards -->
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="screw position-relative">
          <img src="{{asset('asset/images/screw.png')}}" alt="Screw" class="img-fluid">
          <div class="cards-container position-absolute">
            <div class="row">
                <div class="col-md-6 record card m-1">
                <div class="card-body text-center">
                    <h3>89</h3>
                    <p>Total Import</p>
                </div>
                </div>
                <div class="col-md-6 record card m-1">
                <div class="card-body text-center">
                    <h3>05</h3>
                    <p>Import Upcoming</p>
                </div>
                </div>
                <div class="col-md-6 record card m-1">
                <div class="card-body text-center">
                    <h3>100</h3>
                    <p>Project Completed</p>
                </div>
                </div>
                <div class="col-md-6 record card m-1">
                <div class="card-body text-center">
                    <h3>13</h3>
                    <p>Major Buyers</p>
                </div>
                </div>
            </div>
         </div>

        </div>
      </div>
    </div>
    <!-- Second Row -->
    <div class="row">
      <!-- Left side with chairman image -->
      <div class="col-md-6 lower-left ps-0">
        <img src="{{asset('asset/images/chairman-image.png')}}" alt="Chairman" class="img-fluid">
      </div>
      <!-- Right side with chairman message -->
      <div class="col-md-6 lower-right">
        <h2>Message from Chairman</h2>
        <p>Some text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn btn-primary">Read More</button>
      
        <div class="designation card">
          <div class="card-body theme-color">
            <h5 class="card-title">Mr. S M Nurun Nabi</h5>
            <div class="underline4"></div>
            <p class="card-text pt-1">Chairman</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Our Prospective Buyers</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aperiam, numquam repellendus voluptatem ea deleniti vitae illo possimus error.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/AKS-Logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/BMSIL-Logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                </div> 
                 <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/AKS-Logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/BMSIL-Logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('asset/images/madina-logo.png')}}" alt="Logo" width="200px" class="img-fluid h-100">
                    </div>
                </div>
            </div>
        </div>
  </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0">
                <img src="{{asset('asset/images/office.jpg')}}" alt="Office Desk" width="500px">
            </div>
            <div class="col-md-6">
                <h4 class="pt-5">About Us</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat eligendi odio dolores ipsum aut voluptate blanditiis doloremque maiores libero corrupti quas, reprehenderit voluptatem cum soluta ea, inventore earum vero magni?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti libero vitae aut incidunt odio, modi nemo maxime quos rerum eaque minus voluptates doloribus explicabo dolor voluptatum rem, nisi veritatis nobis!</p>
                <button class="btn btn-success">Read more</button>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row pl">
            <div class="col-md-6">
                <h4>Image Gallery</h4>
                <p>Ship Recycling Yards in Bangladesh are located exclusively in an area of about 18 km in length from Fouzdarhat in the south to Sonaichori, Baro Aulia in the north of Sitakunda Upazila.</p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <button class="btn btn-light mx-2">All</button>
                <button class="btn btn-light mx-2">Corporate</button>
                <button class="btn btn-light mx-2">Project</button>
            </div> 
        </div>
        <div class="row pl">
            <div class="col-md-3">
                <img src="{{asset('asset/images/ship.png')}}" alt="Ship">
                <h4>MV. Sino Ocean</h4>
            </div>
            <div class="col-md-3">
                <img src="{{asset('asset/images/ship.png')}}" alt="Ship">
                <h4>MV. Sino Ocean</h4>
            </div>
            <div class="col-md-3">
                <img src="{{asset('asset/images/ship.png')}}" alt="Ship">
                <h4>MV. Sino Ocean</h4>
            </div>
            <div class="col-md-3">
                <img src="{{asset('asset/images/ship.png')}}" alt="Ship">
                <h4>MV. Sino Ocean</h4>
            </div>
        </div>
    </div>

@include('frontend.layout.footer')
@endsection('content')