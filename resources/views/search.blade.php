<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    {{View::make('header')}}

    <section id="product">
        <h1 class="text-center text-muted mt-5 h1">Nos Produits<h1>
    <div class="container mt-1 p-3">
        <h3 class="text-success">Results</h3>
    <div class="row mt-5">
    @foreach($products as $product)
     <div  class="col-6 col-md-4">
              <div class="">
              
              <a href="detail/{{$product->id}}"><img style="width:350px;height:350px;object-fit:contain;" src="{{ asset('images/'.$product->image) }}"></a>
              </div>
            </div>
              <div  class="col-6 col-md-6 mt-5">
                
                <div class="card-body mt-5">
                  <h5 class="card-title  h3">{{$product['description']}}</h5>  
                  <h5 class="card-title  text-success mt-4">{{$product['price']}} cfa</h5>  
                 </div>
                </div>
              </div>
     </div>
    @endforeach
    
    </div>
    </div>
    </section>

    {{View::make('footer')}}
</body>
</html>