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

<main class="brand-text-color">
    <div class="container">
        <div class="page-inner-title my-4">
            <p>{{$management->top_management_title}}</p>
        </div>
        <div class="page-inner-body my-4">
            <p>
                {{$management->top_description}}
            </p>
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
        <div class="page-inner-title my-4">
            <p>{{$management->mid_management_title}}</p>
        </div>
        <div class="page-inner-body my-4">
            <p>
                 {{$management->mid_description}}
            </p>
        </div>
        <div class="row my-4">
            @foreach($midM as $manager)
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="management-div">
                    <img class="img-fluid rounded" src="{{ asset('uploads/midManagement/' . $manager->image) }}" alt="Management Image" style="height: 480px;">
                    <div class="management-title">
                        <h5 class="pb-2">{{ $manager->name }}</h5>
                        <p>{{ $manager->designation }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="page-inner-body my-4">
            <p>
                {{$management->yard_description}}
            </p>
        </div>
        <div class="row my-4">
            @foreach($yardM as $manager)
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="management-div">
                    <img class="img-fluid rounded" src="{{ asset('uploads/yardManagement/' . $manager->image) }}" alt="Management Image" style="height: 480px;">
                    <div class="management-title">
                        <h5 class="pb-2">{{ $manager->name }}</h5>
                        <p>{{ $manager->designation }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="page-inner-body my-4">
            <p>
                The company has employed sufficient employees to ensure the smooth operation of the business. Currently, the company has 450 employees and workers in the office and yard.
            </p>
        </div>
    </div>
</main>

@include('frontend.layout.footer')
@endsection('content')
