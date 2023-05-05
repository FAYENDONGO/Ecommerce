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
    

    @include("header")
    
    <form method="POST" id="loginForm" style="width:350px; height:auto; background:white; padding:20px; border-radius:10px; border:solid 0.5px #e5e5e5; margin:0 auto; margin-top:5%; margin-bottom:5%;">
    <p style="font-size:20px; font-weight:bold;">S'inscrire</p>
        <p>
    @if (session('status'))
            <div class="alert alert-success my-2" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="card-form">
            <form method="POST" action="{{route('register')}}" autocomplete="off">
                @csrf
                <div class="mb-2">
                    <div class="input-group">
                        <span class="input-group-text rounded-0 shadow-none bg-white">
                            <i class="ri-user-line"></i>
                        </span>
                        <input type="text" id="name" placeholder="Nom" class="form-control border-start-0 rounded-0 shadow-none @error('name') is-invalid @enderror" name="name" required autocomplete="off" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="input-group">
                        <span class="input-group-text rounded-0 shadow-none bg-white">
                            <i class="ri-mail-check-line"></i>
                        </span>
                        <input type="email" id="emailaddress" placeholder="adresse email" class="form-control border-start-0 rounded-0 shadow-none @error('email') is-invalid @enderror" name="email" required autocomplete="off">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="input-group">
                        <span class="input-group-text rounded-0 shadow-none bg-white">
                            <i class="ri-key-line"></i>
                        </span>
                        <input type="password" id="password" placeholder="password" class="form-control border-start-0 border-end-0 rounded-0 shadow-none @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                        <span class="input-group-text rounded-0 shadow-none bg-white" onclick="password_show_hide();">
                            <i class="ri-eye-off-line showpassword"></i>
                            <i class="ri-eye-line hidepassword d-none"></i>
                        </span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="input-group">
                        <span class="input-group-text rounded-0 shadow-none bg-white">
                            <i class="ri-key-2-line"></i>
                        </span>
                        <input type="password" id="password_confirmation" placeholder="confirmer password" class="form-control border-start-0 border-end-0 rounded-0 shadow-none @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="off">
                        <span class="input-group-text rounded-0 shadow-none bg-white" onclick="password_conf_show_hide();">
                            <i class="ri-eye-off-line showpassword_conf"></i>
                            <i class="ri-eye-line hidepassword_conf d-none"></i>
                        </span>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="form-check text-start mb-3">
                        <input class="form-check-input rounded-0 shadow-none" name="remember" type="checkbox" id="tos" required>
                        <label class="form-check-label" for="remember">se souvenir de moi.</label>
                    </div>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-lg btn-primary w-100 rounded-0 shadow-none text-white">
                        <i class="ri-check-double-line"></i>
                        <span>ENTRER</span>
                    </button>
                </div>
                <div class="mb-3 text-center">
                    <a class="btn btn-link text-decoration-none shadow-none text-muted" title="S'enregistrer" href="{{ route('login') }}"><i class="ri-user-follow-line"></i> </a>
                </div>
            </form>
        </div>
    </div>
</div>
</form>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   

  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   @include("footer")

</body>


<style>

    a { 
        text-decoration:none;
        color:orange;
        font-weight:bold;
    }
    form {
        text-align:center;
    }

    label {
        display:block;
        font-size:16px;
        color:dimgrey;
        margin-bottom:5px;
    }

    input {
        padding:15px;
        border-radius:10px;
        border:solid 0.5px #e5e5e5;
    }

    input:focus {
        outline:solid 2px orange;
    }

    input[type=submit] {
        background:orange;
        color:white;
        border:none;
        border-radius:10px;
    }
</style>
</html>