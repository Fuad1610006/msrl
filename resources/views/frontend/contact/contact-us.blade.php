@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

<section class="contact-hero">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 d-flex align-items-center justify-content-center">
        <div class="d-flex flex-wrap justify-content-center">
          <div class="col-md-auto m-2">
            <i class="fa fa-envelope fa-3x"></i>
          </div>
          <div class="col-md-auto m-2">
            <i class="fa fa-at fa-3x"></i>
          </div>
          <div class="col-md-auto m-2">
            <i class="fa fa-phone fa-3x"></i>
          </div>
          <div class="col-md-auto m-2">
            <i class="fa fa-comments fa-3x"></i>
          </div>
          <div class="col-md-auto m-2">
            <i class="fa fa-globe fa-3x"></i>
          </div>
          <div class="col-md-auto m-2">
            <i class="fa fa-map-marker fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
    <h1 class="text-center fs-big">Contact Us</h1>
  </div>
</section>

<section class="contact-info">
  <img src="{{asset('asset/images/screw-background.png')}}" alt="screw-background" class="img-fluid background-screw" width="680px">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-6 d-flex flex-column justify-content-between">
        <div class="contact-details">
          <div class="d-flex align-items-center mb-4">
            <i class="fa fa-phone fa-2x"></i>
            <div class="ms-3">
              <p>+1 (555) 555-5555</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <i class="fa fa-envelope fa-2x"></i>
            <div class="ms-3">
              <p>info@example.com</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <i class="fa fa-globe fa-2x"></i>
            <div class="ms-3">
              <p>www.example.com</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <i class="fa fa-map-marker fa-2x"></i>
            <div class="ms-3">
              <p>123 Main Street, Anytown, CA 12345</p>
            </div>
          </div>
        </div>
        <img src="{{asset('asset/images/map.png')}}" alt="Map image" class="img-fluid mt-3">
      </div>
      <div class="col-md-6">
        <h2 class="mb-3">Contact Us</h2>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" id="phone" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" required></textarea>
          </div>
          <div class="text-end">
             <button type="submit" class="btn btn-light rounded-pill px-4 py-2">Send</button>
          </div>
         
        </form>
      </div>
    </div>
  </div>
</section>

@include('frontend.layout.footer')
@endsection('content')