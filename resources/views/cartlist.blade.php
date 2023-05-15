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

</head>
<body>
    {{View::make('header')}}

<div class="container mt-5 mb-5">
    @foreach($products as $item)
     <div class="row">
         
        <div class="col-sm-4 col-md-4">
              <a href="detail/{{$item->id}}"><img class="" style="width:250px;height:250px;object-fit:contain;"
          src="{{ asset('images/'.$item->image) }}"  ></a>
         </div>

         <div class="col-sm-4 col-md-4 mt-5">
            <h4>{{$item->description}}<h4>
            <h5 class="mt-5">{{$item->name}}</h6>
            <h6 class="text-success">{{$item->price}}<h6>

         </div>

         <div class="col-sm-4 col-md-4 mt-5">
                  <a href="removecart/{{$item->carts_id}}" class="btn btn-warning">Remove to Cart</a>
         </div>
         <hr>
     </div>
    @endforeach
    <a href="/ordernow" class="btn btn-success mt-3">Order now</a>
</div>



    {{View::make('footer')}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   
 
</body>
</html>