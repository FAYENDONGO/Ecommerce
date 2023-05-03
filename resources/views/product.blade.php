@extends('master')
@section('content')

<section id="carousel">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
     
      <img  src="https://sensouq.com/modules/ishislider/views/img/fba3c69d099bfdb13d9a74b4b9a70fa4e0260752_slide%20electromenager.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">First slide label</h5>
        <p class="text-dark">Satisfait ou Remboursé! Oui, aussi simple que ça.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img   src="https://www.senboutique.com/images/uploads/slider2_image_slider-electro.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Second slide label</h5>
        <p class="text-dark">Profitez des remises exceptionnelles.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="https://www.irzilshopping.dz/images/slideshow/slide005.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Third slide label</h5>
        <p class="text-dark">Votre electromenager, notre préoccupation</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section id="product">
    <h1 class="text-center text-muted mt-3">Our Product<h1>
<div class="container mt-4 p-3">
<div class="row">

<div  class="col-6 col-md-3">
  <div class="card">
    <img src="./public/img/1.jpg">
    <div class="card-body text-center">
      <h5 class="card-title"></h5>  
    </div>
</div>


</div>
</div>
</section>

      
@endsection