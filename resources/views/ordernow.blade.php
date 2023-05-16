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
    <div class="container m-5 p-4 border">
     <table class="table">
       <tr>
           <td class="fw-bold">Amount</td>
           <td class="text-muted">{{$total}} CFA</td>
       </tr>
       <tr>
            <td class="fw-bold">Tax</td>
            <td class="text-muted">0 CFA</td>
       </tr>
       <tr>
            <td class="fw-bold">Delivery charge</td>
            <td class="text-muted">400 CFA</td>
       </tr>
       <tr>
            <td class="fw-bold">Total</td>
            <td class="fw-bold">{{$total+400}} CFA</td>
       </tr>


     </table>
     <form action="/orderplace" method="post">
       @csrf
       <div class="form-group">
          <input type="text" style="height:65px;" name="address" placeholder="enter your address" class="form-control">
       </div>
      <div class="form-group">
          <label class="form-label mt-4 fw-bold">Payment Method</label><br>
          <hr>
          <input class="mt-4"  type="radio" name="payment"><span class="fw-bold"> Online payment</span><br>
          <input class="mt-4"  type="radio" name="payment"><span class="fw-bold"> EMI</span><br>
          <input class="mt-4"  type="radio" name="payment"><span class="fw-bold"> cash on delivery</span><br>
      </div>
     <button class="btn btn-success mt-5" type="submit">Confirm Order</button>
     </form>
    </div>
    {{View::make('footer')}}
</body>
</html>