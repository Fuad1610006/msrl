@extends('frontend.layout.app')
@section('content')
@include('frontend.layout.nav')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 d-flex align-items-end">
      <div class="text-md-end pe-md-5 ps-5 ms-5"> 
        <h1 class="mb-0">Industry Overview</h1>
        <div class="underline5"></div>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-end pe-0">
      <img src="{{asset('asset/images/ship.jpg')}}" alt="Hero image" class="img-fluid">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p class="justified-text py-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis ad vero corporis sapiente quo tempora, officiis dignissimos nostrum fuga assumenda dicta sit voluptatem nulla eaque fugiat cupiditate voluptatibus illum animi.
      </p>
    </div>
  </div>
</div>

<section class="players py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-end">Players of the Steel Industry</h2>
        <div class="underline6"></div>
        <p class="justified-text py-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="backward py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-start text-uppercase">Prospect of Backward Linkage (Ship Breaking Industry)</h3>
        <div class="underline3"></div>
        <p class="justified-text py-3 text-container">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
         <img src="{{asset('asset/images/screw-background.png')}}" alt="screw-background" class="img-fluid overview-image" width="450px">
      </div>
    </div>
  </div>
</section>

<section class="mdc py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-start text-uppercase">Market, Demand & Consumption</h3>
        <div class="underline3"></div>
        <p class="justified-text pt-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
        </p>
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="{{asset('asset/images/prospect.png')}}" alt="Prospect" class="img-fluid">
          </div>
        </div>
        <p class="justified-text py-3">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="competitors py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-start text-uppercase">Major Competitors</h3>
        <div class="underline3"></div>
        <p class="justified-text py-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="pfanalysis py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-start text-uppercase">Porters Five Forces Analysis</h3>
        <div class="underline3"></div>
        <p class="justified-text py-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="potential py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3 class="text-start text-uppercase">SWOT Analysis</h3>
        <div class="underline3 mb-1"></div>
        <div class="row row-cols-1 row-cols-md-2 g-3 py-4">
          <div class="col">
            <div class="swot card">
              <div class="card-body">
                <h5 class="card-title text-center text-decoration-underline text-uppercase">Strength</h5>
                <p class="card-text">
                  <ol>
                    <li>Own Ship Breaking Yard</li>
                    <li>Skilled and Experienced Manpower</li>
                    <li>Growth in Turnover</li>
                    <li>Adequate Liquidity</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="swot card">
              <div class="card-body">
                <h5 class="card-title text-center text-decoration-underline text-uppercase">Weakness</h5>
                <p class="card-text">
                   <ol>
                    <li>Own Ship Breaking Yard</li>
                    <li>Skilled and Experienced Manpower</li>
                    <li>Growth in Turnover</li>
                    <li>Adequate Liquidity</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="swot card">
              <div class="card-body">
                <h5 class="card-title text-center text-decoration-underline text-uppercase">Opportunity</h5>
                <p class="card-text">
                   <ol>
                    <li>Own Ship Breaking Yard</li>
                    <li>Skilled and Experienced Manpower</li>
                    <li>Growth in Turnover</li>
                    <li>Adequate Liquidity</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="swot card">
              <div class="card-body">
                <h5 class="card-title text-center text-decoration-underline text-uppercase">Threat</h5>
                <p class="card-text">
                   <ol>
                    <li>Own Ship Breaking Yard</li>
                    <li>Skilled and Experienced Manpower</li>
                    <li>Growth in Turnover</li>
                    <li>Adequate Liquidity</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="potential py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-start text-uppercase">Potential Market & Demand</h3>
        <div class="underline3"></div>
        <p class="justified-text py-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sed facere nemo alias natus dolorum neque a quasi omnis eos, necessitatibus saepe dicta. Quos deserunt quibusdam esse, necessitatibus deleniti ducimus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quaerat, consequuntur aperiam voluptas iste est vel excepturi ea, rerum eos esse. Inventore, molestias eum. Tempore repellat soluta velit beatae ut.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores porro sit quidem fugit iste quam, tenetur numquam, expedita tempore, neque architecto! Error nulla neque similique fuga facere? Minus, omnis magnam.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dolorum laborum deserunt natus itaque eaque accusamus harum veniam ad accusantium quo saepe obcaecati possimus, assumenda soluta nesciunt officiis aliquam veritatis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea repudiandae explicabo distinctio possimus mollitia, sint nam, adipisci, soluta nulla esse! Labore reprehenderit eius, sint quis iure laudantium a dolorum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla repellat ex quo, minus eum architecto repellendus cupiditate nihil? Sapiente quis repellendus inventore cumque cupiditate eius, animi assumenda numquam dicta!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, reprehenderit ea repellat nostrum voluptatem, sapiente provident, tenetur sunt laudantium rerum nesciunt sit in vel. Magni quam delectus expedita doloremque? Amet.
        </p>
      </div>
    </div>
  </div>
</section>

@include('frontend.layout.footer')
@endsection('content')