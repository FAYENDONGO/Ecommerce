<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique en Ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
  
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<style>
a{
    font-size:14px;
    font-weight:700;
}
.superNav{
    fon-size:13px;
}
.form-control{
    outline:none !important;
    box-shadow:none !important
}
@media screen and (max-width:540px)
{
    .centerOnmobile{
        text-align:center
    }
}
img{
    object-fit:contain !important;
}
body{
    background:#e5e5e5;

}

/* Product design */

#product{
    background:#e5e5e5;
}
#product h1{
     font-size:50px;
     letter-spacing:2px;
     font-weight:bold;
}
#product img{
    width:150px;
    height:150px;
    object-fit:contain;
    margin:15px;
}
.card{
    width:230px;
    height:300px;
    border:none;
    box-shadow: 15px 20px 20px gray,
                inset 4px 4px 10px white;
    overflow:hidden;
    justify-content:center;
    align-items:center;
    margin:30px;
    padding:40px;
    border-radius:15px;
}
.card:hover{
    box-shadow: 15px 20px 20px rgb(150, 147, 147),
                inset -4px -4px 4px gray;
    transition:0.1s;
}
@media screen and (max-width:576px){
    .card{
    width:210px;
    height:250px;
    border:none;
    box-shadow: 15px 20px 20px gray,
                inset 4px 4px 10px white;
    overflow:hidden;
    justify-content:center;
    align-items:center;
    margin:20px;
    padding:20px;
    border-radius:15px;

}
#product img{
    width:180px;
    height:150px;
    object-fit:contain;
    margin:15px;
    padding:20px;
    margin-top:20px;
}
#product h5{
    font-size:15px;
}

}

</style>
</html>