<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 
<style>
    .order-img
    {
        width:200px;
        height:200px;
        object-fit:contain;
       
    }
</style>




</head>
<body>
    {{View::make('header')}}
     <h1 class="text-success text-center mt-3">My orders</h1>
      <div class="container">
              @foreach($orders as $item)
              <div class="row container mt-5">
                  <div class="col-sm-3">

                  <a href="detail/{{$item->id}}">
                    <img class="order-img"  src="{{ asset('images/'.$item->image) }}">
                  </a>

                  </div>
                 
                 <div class="col-sm-6 fw-bold mt-5">
                       <h3  class="fw-bold mt-1">{{$item->name}}<h3><br>
                        <span  style="font-size:20px;" class="text-muted fw-bold"> Delivery address : {{$item->address}}</span><br>
                        <span style="font-size:20px;" class="text-muted fw-bold"> Delivery status : {{$item->status}}</span>
                    </div>
                    <hr class="mt-5">
              </div>
               @endforeach

      </div>
    {{View::make('footer')}}

</body>
</html>