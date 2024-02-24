@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

<section class="hero-section">
  <div class="container-fluid">
    <div class="row d-flex align-items-end">
      <div class="col-md-6 ps-7"> 
        <h1>Management Overview</h1>
        <div class="underline5"></div>
    </div>
    <div class="col-md-6 d-flex justify-content-end pe-0">
      <img src="{{asset('asset/images/ship.jpg')}}" alt="Hero image" class="img-fluid">
    </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row px-6">
        <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem reprehenderit aut cupiditate eaque hic doloremque eveniet error vel nam autem et corporis neque tempore, accusantium non est reiciendis animi provident?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus molestias velit, nulla perferendis dicta asperiores sit repellendus, commodi nisi, ducimus obcaecati veniam voluptatibus neque optio! Molestiae hic facilis quis aut.</p>
    </div>
  </div>
</section>


<section class="corporate">
   <img src="{{asset('asset/images/screw-background.png')}}" alt="screw-background" class="img-fluid background-screw" width="680px">
  <div class="container-fluid">
    <div class="row px-6">
      <div class="col-md-6"> 
        <h1>Corporate Setup</h1>
        <div class="underline5"></div>
      </div>
    </div>
    
    <div class="row py-3 px-6 position-relative">
      <div class="col-md-4 management-1 text-start">
        <img src="{{asset('asset/images/management-1.png')}}" alt="Management-1">
      </div>
      <div class="col-md-4 management">
        <div class="card odd">
          <div class="card-body theme-color">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Software Engineer</p>
          </div>
        </div>
        <div class="card even position-absolute">
          <div class="card-body theme-color">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Software Engineer</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 management-2 text-end me-0">
        <img src="{{asset('asset/images/management-2.png')}}" alt="Management-2">
      </div>
    </div>

    <div class="row px-6 py-2">
      <div class="col-md-12">
        <p class="justified-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nulla nihil voluptas earum, porro eius eveniet cumque a corrupti ab libero illo unde neque totam ad, nostrum recusandae suscipit sunt.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ipsa? Nemo nesciunt dolore minima. Quam commodi iusto quo aperiam incidunt delectus nisi quod laboriosam distinctio. Voluptate cum officia quae in?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime voluptates sint, omnis sapiente necessitatibus officia doloremque cupiditate labore odit, illo cum! Pariatur dolorum, in quis vitae ex dignissimos porro natus?
        </p>
      </div>
    </div>
  </div>
</section>

@include('frontend.layout.footer')
@endsection('content')
