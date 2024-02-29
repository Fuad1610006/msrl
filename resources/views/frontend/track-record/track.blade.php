@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
 <section class="track-page-top">
      <div class="overlay">
        <div class="container pt-5 d-flex align-items-end">
          <p><span>T</span>rack Record of Scrap Ship Import</p>
        </div>
      </div>
    </section>
    <!-- page top View end -->
    <!-- Catagory start -->
<section class="my-3 shadow p-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Serch a keyword"
              />
            </div>
          </div>
          {{--<div class="col">
            <div
              id="project-galary-btn"
              class="image-catary d-flex align-items-center justify-content-end"
            >
              <a href="/">All</a>
              <a href="/">Corporate</a>
              <a href="/">Project</a>
            </div>
          </div>--}}
        </div>
      </div>
</section>
    <!-- Catagory end -->
    <!-- Ship List start -->
    <section class="ship-cards">
      <div class="container">
        <div class="row row-cols-1 g-4 my-5">
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">10</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">09</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">08</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">07</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">06</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">05</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">04</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">03</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">02</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="rounded p-3 shadow ship-div overflow-auto">
              <div class="d-flex" style="width: 1100px">
                <div class="w-25 ship-sl">
                  <p class="text-center">01</p>
                </div>
                <div class="w-50 ship-details ps-3">
                  <p>Ship Name</p>
                  <p>MV Sin Ocean</p>
                  <p>Country: [Country Name]</p>
                  <p>Type: [Ship Type]</p>
                  <p>
                    Weight: [Ship Weight]
                    <span class="ps-5 ms-5">Project Status: Completed</span>
                  </p>
                </div>
                <div class="w-25 d-flex align-items-center p-3">
                  <img
                    src="{{asset('asset/images/ship.jpg')}}"
                    alt="Ship image"
                    class="img-fluid rounded"
                  />
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


  