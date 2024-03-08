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
            @foreach($topM as $manager)
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="management-div">
                    <img class="img-fluid rounded shadow" src="{{ asset('uploads/topManagement/' . $manager->image) }}" alt="Management Image" style="height: 480px;">
                    <div class="management-title">
                        <h5 class="pb-2">{{ $manager->name }}</h5>
                        <p>{{ $manager->designation }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="page-inner-body my-4">
            <!-- Your static content -->
        </div>
    </div>
</main>
@include('frontend.layout.footer')
@endsection('content')
