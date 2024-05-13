<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/forgot.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('/css/popup.css') }}"> --}}

    <title>FoodHub</title>

  <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">

</head>

<body>
  
    <div class="body">
        <div class="work">
            <div class="work_img_one">
                <img src="/images/forgot/footer-form-pattern.svg" alt="">
            </div>
            <div class="work_two">
                <div class="logo_img_div">
                    <a href=""><img src="images/login/FoodHub.png" alt="" class="logo_img"></a>
                </div>
    
                <div class="heading_div">
                    <p class="heading">Forgot Password</p>
                </div>
    
                <div class="form_div">
                    <form action="{{ route('reset.password') }}" method="POST">
                        @csrf
                        <div>
                            <input type="email" name="email" id="email" class="imput_ele" placeholder="Register Email" required>
                        </div>
    
                        <div>
                            <input type="password" name="password" id="password" class="imput_ele" placeholder="Password">
                        </div>
    
                        <div>
                            <button type="submit" class="btn">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="terms_div">
                    <p>By Signing in or creating an account you are agreeing to our </p>
                    <a href=""><p>Terms & Conditions</p></a>
                </div>
            </div>

            <div class="work_img_two">
                <img src="images/forgot/footer-form-pattern.svg" alt="">
            </div>
        </div>
    </div>

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Foodhub</p>
    </div>


    <script src="{{asset('js/preloader.js')}}"></script>


</body>

</html>