@extends('frontend.layout.app')

@section('content')

@include('frontend.layout.nav')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 ms-0 ps-0">
                <img src="{{asset('asset/images/ship.png')}}" alt="Hero Image" width="500px" class="img-fluid h-100">
            </div>
            <div class="col-md-7 pt-3">
                <h3 class="py-2">About Us</h3>
                <p class="pe-4 pb-3 py-1 justified-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas itaque autem sunt ipsa in debitis inventore assumenda harum, totam eos aliquam, recusandae non nesciunt fugit obcaecati, eaque optio unde rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum laborum assumenda non consequuntur officiis. Odio distinctio quidem quod, adipisci ducimus delectus vel tenetur, amet ad ipsa necessitatibus magnam omnis voluptatum.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-5">
                <h3 class="py-2">Our Sister Concern</h3>
                <p class="py-1 justified-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eligendi eos asperiores, laborum perferendis doloribus numquam architecto? Voluptatem, sapiente. Vero consequatur animi sequi quod aliquid, perferendis magni facilis tenetur dolores?</p>
            </div>
            <div class="col-md-6 text-end p-5">
                <img src="{{asset('asset/images/logo.png')}}" alt="sister-logo" width="200px" class="img-fluid h-100">
            </div>
        </div>
    </div>

<section class="mission">
  <div class="container-fluid">
    <div class="row position-relative">
      <div class="col-md-6 position-relative">
          <img src="{{asset('asset/images/17.png')}}" alt="17" class="img-fluid">
          <div class="years-text fs-3 fw-bold"><span>Years of</span> <span class="d-block">experience</span></div>
      </div>
      <div class="col-md-6 text-end py-2">
        <div class="mission-text text-end">
          <h3 class="py-2">Our Vision and Mission</h3>
          <p class="justified-text ps-5 ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, praesentium vero? Similique amet, ad quaerat dolores nisi adipisci nobis modi blanditiis accusantium, cumque suscipit quia, ratione quidem perferendis repellat eos.</p>
        </div>
        <div class="years-image">
          <img src="{{asset('asset/images/years.png')}}" alt="Years" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="track py-5 bs">
  <div class="container">
    <div class="row">
      <!-- Left column for heading and text -->
      <div class="col-md-6">
        <h2 class="fw-bold py-1">Track Record of Ship Import</h2>
        <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit vel hic natus, sint quam atque laborum, eveniet velit laboriosam fugiat ipsum autem fugit quis, ab voluptas quasi a nostrum architecto!</p>
      </div>
      <!-- Right column for cards -->
      <div class="col-md-6">
        <!-- First row of cards -->
        <div class="row">
          <div class="col-md-6 record card one m-1">
            <div class="card-body text-center">
              <h3>89</h3>
              <p>Total Import</p>
            </div>
          </div>
          <div class="col-md-6 record card two m-1">
            <div class="card-body text-center">
              <h3>05</h3>
              <p>Import Upcoming</p>
            </div>
          </div>
        </div>
        <!-- Second row of cards -->
        <div class="row mt-3 position-relative" style="margin-left: -40%;">
          <div class="col-md-6 record card three m-1">
            <div class="card-body text-center">
              <h3>100</h3>
              <p>Project Completed</p>
            </div>
          </div>
          <div class="col-md-6 record card four m-1">
            <div class="card-body text-center">
              <h3>13</h3>
              <p>Major Buyers</p>
            </div>
          </div>
      </div>
    </div>
    <!-- Background image placed here -->
    <div class="row">
      <div class="col-md-6 offset-md-6">
        <img src="{{asset('asset/images/screw-background.png')}}" alt="Background- Screw" class="img-fluid about-screw" width="450px">
      </div>
    </div>
  </div>
</section>



<section class="history">
    <div class="container">
        <div class="row">
            <div class="text-end py-2">
                <h3 class="">Our History</h3>
                <div class="underline"></div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('asset/images/history.png')}}" alt="History" class="img-fluid h-100 rounded" width="500px">
            </div>
            <div class="col-md-6 py-2">
                <p class="justified-text py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat animi reiciendis ea suscipit exercitationem? Assumenda aperiam, quibusdam ea iusto illo vel maxime provident commodi amet iure! Magni doloremque accusamus nostrum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure molestiae molestias quis dignissimos placeat labore quo aliquid, nam possimus ullam, quae, neque omnis nesciunt laudantium iusto. Eos, esse provident.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro optio provident sunt impedit dolore labore voluptas ad et dolor, quisquam unde ut excepturi aliquam officia enim voluptatibus nobis at corporis.
                </p>
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


 <section class="information">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-group py-4">
          <h3 class="text-uppercase text-center">Basic information of the the company</h3>
          <div class="underline3 mx-auto"></div>
        <p class="py-3">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab fuga beatae inventore optio consectetur, autem, vero porro modi sed perspiciatis quos tenetur, id quaerat? Deleniti veniam ut itaque alias voluptatibus.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ea eius, quo doloribus molestiae laboriosam consectetur molestias quasi magnam, possimus fugit voluptates a nostrum enim perspiciatis veritatis, dolorem quis atque?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi molestiae laboriosam nemo numquam! Ratione sapiente ducimus deleniti ex quae veritatis accusantium atque beatae sint sequi quasi, laborum officiis a tenetur?
        </p>
        </div>
        <div class="text-group py-4">
          <h3 class="text-uppercase text-center">Availability of Necessary Support Facilities</h3>
          <div class="underline3 mx-auto"></div>
        <p class="py-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab fuga beatae inventore optio consectetur, autem, vero porro modi sed perspiciatis quos tenetur, id quaerat? Deleniti veniam ut itaque alias voluptatibus.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ea eius, quo doloribus molestiae laboriosam consectetur molestias quasi magnam, possimus fugit voluptates a nostrum enim perspiciatis veritatis, dolorem quis atque?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi molestiae laboriosam nemo numquam! Ratione sapiente ducimus deleniti ex quae veritatis accusantium atque beatae sint sequi quasi, laborum officiis a tenetur?
        </p>
        </div>
        <div class="text-group py-4">
          <h3 class="text-uppercase text-center">Capital Structure</h3>
          <div class="underline3 mx-auto"></div>
        <p class="py-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab fuga beatae inventore optio consectetur, autem, vero porro modi sed perspiciatis quos tenetur, id quaerat? Deleniti veniam ut itaque alias voluptatibus.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ea eius, quo doloribus molestiae laboriosam consectetur molestias quasi magnam, possimus fugit voluptates a nostrum enim perspiciatis veritatis, dolorem quis atque?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi molestiae laboriosam nemo numquam! Ratione sapiente ducimus deleniti ex quae veritatis accusantium atque beatae sint sequi quasi, laborum officiis a tenetur?
        </p>
        </div>
      </div>
    </div>
  </div>
 </section> 
    
@include('frontend.layout.footer')

@endsection('content')