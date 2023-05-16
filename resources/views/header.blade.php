<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}

?>


<div class="superNav border-bottom py-2 " style="background-color: rgb(255, 255, 160);">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-1 col-xs-12 centerOnMobile">
<select class="me-3 border-0 bg-light">
                <option value="en-us">EN-US</option>
                <option value="en-us">FR-FR</option>
</select>
<span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><small>sensatcom@gmail.com</small></span>
<span class="me-2"><i class="fa-solid fa-phone me-1 text-warning"></i><small>00221770484242</small>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
 <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href=""></a><span>
 
</div>
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg  sticky-top navbar-light fw-bold p-3 shadow-sm" style="background-color:rgb(188, 249, 249);">
<div class="container">
<a class="navbar-brand" href="#">Logo</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavdropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
    <div class="input-group">
        <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
        <input type="text" class="form-control border-warning" style="color:white;">
        <button class="btn btn-warning text-white">Search</button>
    </div>
</div>
<form action="/search" method="get">
    @csrf
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<div class="ms-auto d-none d-lg-block">
<div class="input-group">
   <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
   <input type="text" name="query" class="form-control border-warning" style="">
   <button type="submit" class="btn btn-warning text-white">Rechercher</button>
</div>
</div>
</form>
<ul class="navbar-nav ms-auto">
  <li class="nav-item">
    <a class="nav-link" href="/">Accueil</a>
<li>  
<li class="nav-item">
    <a class="nav-link" href="/myorders">Qui sommes nous</a>
<li>
<li class="nav-item">
    <a class="nav-link" href="">Contactez nous</a>
<li>
<ul>

<ul class="navbar-nav ms-auto">
<li class="nav-item">
    <a class="nav-link mx-2" href="/cartlist"><i class="fa-solid fa-cart-shopping me-1"></i>Mon panier ({{$total}})</a>
</li>
<li class="nav-item">
    <a class="nav-link mx-2" href="register">S'inscrire</a> 
</li>
@if(Session::has('user'))
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      {{Session::get('user')['name']}}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="/logout">logout</a></li>
   
    </ul>
  </li>
  @else
  <li class="nav-item">
    <a class="dropdown-item" href="{{route('login')}}"><i class="fa fa-sign-out fa-lg"></i>Login</a>
    </li>
  @endif


</ul>

</div>
</div>

</nav>



