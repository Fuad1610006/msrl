@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
<section class="management-page-top">
      <div class="overlay">
        <div class="container pt-5 d-flex align-items-end">
          <p><span>M</span>anagement Overview</p>
        </div>
      </div>
</section>
   
<main class="brand-text-color brand-text-color">
  <div class="container">
    <div class="page-inner-title my-4">
      <p>CORPORATE SET UP</p>
    </div>
    <div class="row my-4">
      <div class="col-sm-12 col-md-6 mb-3">
        <div class="management-div">
          <img
            class="img-fluid rounded shadow"
            src="{{asset('asset/images/management-1.png')}}"
            alt="Management"
          />
          <div class="management-title">
            <h5 class="pb-2">Mr. S M Nurun Nabi</h5>
            <p>Chairman</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 mb-3">
        <div class="management-div">
          <img
            class="img-fluid rounded shadow"
            src="{{asset('asset/images/management-1.png')}}"
            alt="Management"
          />
          <div class="management-title">
            <h5 class="pb-2">Mr. S M Nurun Nabi</h5>
            <p>Chairman</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="management-div">
          <img
            class="img-fluid rounded shadow"
            src="{{asset('asset/images/management-1.png')}}"
            alt="Management"
          />
          <div class="management-title">
            <h5 class="pb-2">Mr. S M Nurun Nabi</h5>
            <p>Chairman</p>
          </div>
        </div>
      </div>
    </div>
    <div class="page-inner-body my-4">
      <p>
        Mr. S. M. Nurun Nabi, Managing Director &Chairman of both the
        companies is the Chief Executive of the company and projectwho is
        actively involved the day-to-day operation. He has been assisted by
        theDirectors of the company for smooth implementation of the policy
        to be takenfrom time to time to operate the business in a proper
        manner.   The organization structure of the yard isbased on
        Registered Office Control & Operational basis. The jobresponsibility
        of the management and technical personnel is clearly defined bythe
        Board of Directors of the company. The project after modernization
        will berunning by an efficient management team of professionals
        having good trackrecords in their respective fields of operations.  
      </p>
      <p>
        PTCL & MSRL maintains separate management for head office andyard.
        The Management teams of both locations are headed by Mr. S. M.
        NurunNabi, Managing Director of the company. However, Chairman, Mr.
        Md. JahidulIslam is also supervising all the activities of the team.
        Other members in themanagement team have adequate knowledge and
        experiences to run the business smoothly.Currently, there are
        35permanent office staffs, 72 securities and 525Supervisors,
        Operators, labors are engaged with both the yards operation.
      </p>
    </div>
  </div>
</main>
@include('frontend.layout.footer')
@endsection('content')
 