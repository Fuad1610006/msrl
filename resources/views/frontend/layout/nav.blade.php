<header>
    <div class="logo">
      <img src="{{asset('asset/images/Mask group.png')}}" alt="Logo" width="100px" class="img-fluid">
    </div>
    <div class="icons ms-auto">
      <i class="fas fa-map-marker-alt ps-3 pe-2"></i> <span class="fw-light">North Khulshi, Chittagong, Bangladesh</span> 
      <i class="fas fa-envelope ps-3 pe-2"></i> <span class="fw-light"> info@admin.com </span> 
      <i class="fas fa-phone ps-3 pe-2"></i> <span class="fw-light"> +880123456789</span>
    </div>
</header>
<nav class="navbar navbar-expand-sm bg-white navbar-white">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('management')}}">Team</a>
        </li>
         <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('track-record')}}">Project</a>
        </li>
         <li class="nav-item">
          <a class="nav-link fw-medium" href="#">Sister Concern</a>
        </li>
         <li class="nav-item">
          <a class="nav-link fw-medium" href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="secondary-header">
    <div class="menus">
      <a href="#" class="mx-3 fw-medium">Upcoming Project</a>
      <a href="#" class="mx-3 fw-medium">Recent Project</a>
      <a href="#" class="mx-3 fw-medium">Completed Project</a>
    </div>
    <div class="sister-logo d-flex">
        <p class="pe-2 my-auto fw-medium">Sister Concern -</p>
      <img src="{{asset('asset/images/logo.png')}}" alt="Sister Concern Logo" width="50px" class="h-100 my-auto">
    </div>
</div>





 