@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

  <div class="container-fluid">
    <div class="row d-flex align-items-end">
      <div class="col-md-6"> 
      <h1 class="space">Track Record of Ship Import</h1>
      <div class="underline7 space"></div>
    </div>
    <div class="col-md-6 pe-0 me-0">
      <img src="{{asset('asset/images/ship.jpg')}}" alt="Hero image" class="img-fluid float-end">
    </div>
    </div>
  </div>



<section class="ship-cards">
   <img src="{{asset('asset/images/screw-background.png')}}" alt="screw-background" class="img-fluid track-screw" width="750px">
  <div class="container">
    <div class="row row-cols-1 g-4">
      <div class="col">
        <div class="trc card my-4">
          <div class="card-body bg-card d-flex align-items-center">
               <h5 class="card-title fs-bigger text-muted" style="width: 12%;">01</h5>
             <div class="vr"></div>
            <div class="me-auto" style="width: 58%;">
              <p class="card-text">Ship Name</p>
              <p class="card-text fcg">MV Sin Ocean</p>
              <p class="card-text">Country: [Country Name]</p>
              <p class="card-text">Type: [Ship Type]</p>
              <p class="card-text">Weight: [Ship Weight]
                   <span class="ps-5 ms-5">Project Status: Completed</span> 
              </p>
            </div>
            <div class="text-end">
              <img src="{{asset('asset/images/ship.jpg')}}" alt="Ship image" class="img-fluid rounded" width="300px">
            </div>
          </div>
        </div>
        <div class="trc card my-4">
          <div class="card-body bg-card d-flex align-items-center">
            <h5 class="card-title fs-bigger text-muted" style="width: 12%;">02</h5>
             <div class="vr"></div>
            <div class="me-auto" style="width: 58%;">
              <p class="card-text">Ship Name</p>
              <p class="card-text fcg">MV Rising Glory</p>
              <p class="card-text">Country: [Country Name]</p>
              <p class="card-text">Type: [Ship Type]</p>
              <p class="card-text">Weight: [Ship Weight]
                   <span class="ps-5 ms-5">Project Status: Completed</span> 
              </p>
            </div>
            <div class="text-end">
              <img src="{{asset('asset/images/ship.jpg')}}" alt="Ship image" class="img-fluid rounded" width="300px">
            </div>
          </div>
        </div>
        <div class="trc card my-4">
          <div class="card-body bg-card  d-flex align-items-center">
            <h5 class="card-title fs-bigger text-muted" style="width: 12%;">03</h5>
           <div class="vr"></div>
            <div class="me-auto" style="width: 58%;">
              <p class="card-text">Ship Name</p>
              <p class="card-text fcg">MV Ocean Explorer</p>
              <p class="card-text">Country: [Country Name]</p>
              <p class="card-text">Type: [Ship Type]</p>
              <p class="card-text">Weight: [Ship Weight]
                   <span class="ps-5 ms-5">Project Status: Completed</span> 
              </p>
            </div>
            <div class="text-end">
              <img src="{{asset('asset/images/ship.jpg')}}" alt="Ship image" class="img-fluid rounded" width="300px">
            </div>
          </div>
        </div>
        <div class="trc card my-4">
          <div class="card-body bg-card d-flex align-items-center">
            <h5 class="card-title fs-bigger text-muted" style="width: 12%;">04</h5>
            <div class="vr"></div>
            <div class="me-auto" style="width: 58%;">
              <p class="card-text">Ship Name</p>
              <p class="card-text fcg">MV Iroquios Maiden</p>
              <p class="card-text">Country: [Country Name]</p>
              <p class="card-text">Type: [Ship Type]</p>
             <p class="card-text">Weight: [Ship Weight]
                   <span class="ps-5 ms-5">Project Status: Completed</span> 
              </p>
            </div>
            <div class="text-end">
              <img src="{{asset('asset/images/ship.jpg')}}" alt="Ship image" class="img-fluid rounded" width="300px">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add more card rows as needed -->
  </div>
</section>

@include('frontend.layout.footer')
@endsection('content')


  