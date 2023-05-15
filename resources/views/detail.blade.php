@extends('master')
@section('content')
<div class="container">
   <h3 class="mt-5 productdetail fw-bold">Product detail</h3>

</div>
<div class="container bg-white">
    <div class="row m-5 p-5">
    <div class="col-sm-6">
        <img class="detail-img" src="{{ asset('images/'.$product->image) }}">
    </div>
<div class="col-sm-6 col-2">
    <a href="/">Go back</a>
    <h2 class="mt-3">{{$product->description}}</h2>

        <h4 class="mt-5 text-muted">{{$product->name}}<h4>
        <h4 class="mt-3 text-muted">{{$product->price}}</h4>
      
        <div class="mt-5">
         <form action="/add_to_cart" method="post">
            @csrf
          <input type="hidden" name="product_id" value="{{$product->id}}">
          <button class="btn btn-warning">Add to card</button>
         <a href="order"> <button class="btn btn-success">Buy now</button></a>
        </form>   
</div>
</div>
</div>

</div>




@endsection