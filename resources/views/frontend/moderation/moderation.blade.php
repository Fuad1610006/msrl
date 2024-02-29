@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')
<section class="management-page-top">
    <div class="overlay">
        <div class="container pt-5 d-flex align-items-end">
            <p><span>M</span>oderation of Yard</p>
        </div>
    </div>
</section>

<main class="brand-text-color brand-text-color">
    <div class="container">
        @foreach($moderation as $m)
        <div class="page-inner-body my-4">
            <p>{!! $m->moderation_text !!}</p>
        </div>
        @endforeach
    </div>
</main>
@include('frontend.layout.footer')
@endsection('content')
