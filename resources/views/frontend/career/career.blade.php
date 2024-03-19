@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
<section class="conact-page-top">
      <div class="overlay">
        <div class="container pt-5 d-flex align-items-end">
          <p><span>C</span>areer</p>
        </div>
      </div>
    </section>
    <!-- page top View end -->
    <!-- Contact Page Body start -->
    <section class="container my-4 brand-text-color">
      <div class="row">
        <div class="col-sm-12 col-md-6 contact-form p-4">
          <p>Personal Information</p>
          <div>
            <form method="POST" action="{{route('career.store')}}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Full Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleInputEmail1"
                  name="full_name"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputPassword1"
                  name="email"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Contact Number</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleInputPassword1"
                  name="phone"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Cover Letter</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="message"
                ></textarea>
              </div>
              <div class="form-group mb-3">
                  <label for="file">Upload CV (PDF)</label>
                  <input type="file" id="file" class="form-control" name="file" accept=".pdf" required>
                  @if($errors->has('file'))
                      <span class="text-danger"> {{ $errors->first('file') }}</span>
                  @endif
              </div>
               <button type="submit" class="btn btn-green m-1 border rounded-pill px-4">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@include('frontend.layout.footer')
@endsection('content')