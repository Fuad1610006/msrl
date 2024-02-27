@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
 <section class="galary-page-top">
      <div class="overlay">
        <div class="container pt-5 d-flex align-items-end">
          <p><span>G</span>allery</p>
        </div>
      </div>
    </section>
    <!-- page top View end -->
    <!-- Galary start -->
    <section class="container py-5 brand-text-color" id="galary">
      <div class="row mb-4">
        <div class="col-sm-6 galary-text">
          <a class="brand-text-color" href="">
            <h6 class="brand-text-color">[1234 Result]</h6>
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
    <!-- Galary end -->
    <!-- pagination start -->
    <section class="my-4 d-flex justify-content-center">
      <nav aria-label="Page navigation example " class="pagination-custom">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </section>

@include('frontend.layout.footer')
@endsection('content')
