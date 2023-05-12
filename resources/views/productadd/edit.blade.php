<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    {{View::make('header')}}
    <section class="container mt-5 mb-5">
       <form action="{{ url('update/'.$edits->id) }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{$edits->name}}" class="form-control w-50">
         </div> 

         <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" value="{{$edits->price}}" class="form-control w-50">
         </div> 

         <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" value="{{$edits->category}}"  class="form-control w-50">
         </div> 

         <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" value="{{$edits->description}}" class="form-control w-50">
         </div> 

         <div class="mb-3">
            <label class="form-label">Image</label>
            <img style="height:100px;width:100px;border-radius:50%;object-fit:contain;" src="{{ asset('images/'.$edits->image) }}">
            <input type="file" name="image" class="form-control w-50">
         </div> 
       
          <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </section>

    {{View::make('footer')}}

</body>
</html>