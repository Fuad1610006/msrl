@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 d-flex align-items-end">
      <div class="pl-95"> 
        <h1 class="mb-0">Moderation of Yard</h1>
        <div class="underline3"></div>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-end pe-0">
      <img src="{{asset('asset/images/ship.jpg')}}" alt="Hero image" class="img-fluid">
    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <p class="justified-text py-4">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae mollitia sequi quod enim reprehenderit cum corporis, numquam necessitatibus culpa perferendis doloremque ipsa quam velit atque alias provident error temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio unde nihil perspiciatis! Laudantium, nam harum iste porro blanditiis architecto ratione tenetur quod vel quae aperiam nemo, necessitatibus quibusdam. Possimus, minima. Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, doloribus ab! Iure dolore ea est veritatis ad. Atque mollitia voluptatum sit necessitatibus provident aliquam enim eius, id delectus consequuntur modi.
        </p>
      </div>
      </div>
    </div>
</div>

<section class="necessity">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-end text-container">
        <h3 class="text-uppercase">The Necessity of Moderation</h3>
        <div class="underline6"></div>
        <p class="text-start justified-text py-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Error laboriosam perspiciatis corporis temporibus quibusdam iste dicta nesciunt consectetur quae ad? Expedita iste totam commodi molestias harum sapiente fuga repellat? Nesciunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae pariatur quisquam atque totam nobis velit impedit quasi. Tempora blanditiis ipsum accusantium laboriosam culpa sapiente. Quaerat consequatur velit corrupti natus. Fugit.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at sunt aliquid deserunt dolorum deleniti ab ducimus nulla reprehenderit impedit maiores praesentium, maxime in, a saepe harum aliquam est quo!
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque. Voluptatibus ad id ipsam voluptates quisquam impedit earum rem dolores dolorem voluptate et, alias obcaecati, temporibus pariatur corporis ratione accusamus!
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi aut tempora beatae ad incidunt inventore ducimus in facere laboriosam? Itaque eius vitae laborum iure ipsam blanditiis minus ab consequuntur tempore.
        </p>
        <img src="{{asset('asset/images/screw-background.png')}}" alt="screw-background" class="img-fluid background-image" width="450px">
      </div>
    </div>
  </div>
</section>

@include('frontend.layout.footer')
@endsection('content')
 