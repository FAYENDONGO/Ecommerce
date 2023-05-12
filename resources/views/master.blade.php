<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique en Ligne</title>
    <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
    {{View::make('header')}}
    
    @yield('content')

    
    {{View::make('footer')}}
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   

  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
/* firstsection */

.first{
  box-shadow:10px 2px 5px gray;
}
.firstsection img{
    width: 60px;
    height:60px;
    object-fit:contain;
 }
 .firstsection h6{
    font-size:12px;
 }
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
  background: #F5F5F5;


}

/* Product design */

#product{

}
#product h1{
     font-size:50px;
     letter-spacing:2px;
     font-weight:bold;
}
#product img{
    width:200px;
    height:200px;
    object-fit:contain;
    margin:15px;
}
.card{
    width:230px;
    height:300px;
    border:none;
    box-shadow: 0 0 14px 6px rgba(0,0,0,0.04);
    border:solid 0.5px #e5e5e5;
    justify-content:center;
    border-radius:13px;
    align-items:center;
    margin:30px;
    padding:40px;

}
/*.card:hover{
    transform:scale(1.2);
    transition:0.1s;
}*/
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
.sectiontwo img{
    width:300px;
    height:400px;
}
.card-first{
    width:300px;
    height:420px;
    overflow:hidden;
    padding:40px;
    border:none !important;
}
.card-first h6{
    position:relative;
    bottom:40px;
    right:13px;
    font-size:20px;
}
.card-first img{
    width:100px;
    height:100px;
    object-fit:contain;
}

/* detail */
.detail-img{
    width:400px;
    height:400px;
    object-fit:contain;
}
   

</style>

  
<script type="text/javascript"> 
   $('.owl-carousel').owlCarousel(
    {
         loop:true,
         margin:30,
         nav:false,
         autoplay:true,
         dots:false,
         stagePadding:50,
         autoplayTimeout:2000,
       responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
         }
   })
</script>


</html>