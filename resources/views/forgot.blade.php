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

    <title>Document</title>
</head>

<body>

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Foodhub</p>
      </div>

    <div>
        <div class="pop_above">
            <div class="body">
                <div class="work">
                    <div class="work_img_one">
                        <img src="/images/forgot/footer-form-pattern.svg" alt="">
                    </div>
                    <div class="work_two">
                        <div class="logo_img_div">
                            <a href=""><img src="images/logo.png" alt="" class="logo_img"></a>
                        </div>
            
                        <div class="heading_div">
                            <p class="heading">Forgot Password</p>
                        </div>
            
                        <div class="form_div">
                            <form action="" method="POST">
                                <div class="imput_ele_div">
                                    <input type="email" name="" id="customer_id" class="imput_ele" placeholder="Register Email" required>
                                </div>
            
                                <div class="imput_ele_div">
                                    <input type="password" name="" id="cus_password" class="imput_ele" placeholder="Password">
                                </div>
            
                                <div>
                                    <button class="btn">Proceed</button>
                                </div>
                            </form>
                        </div>
        
                        <div class="terms_div">
                            <p>By Signing in or creating an account you are agreeing to our </p>
                            <a href="" onclick="togglePopup()"><p>Terms & Conditions</p></a>
                        </div>
                    </div>
        
                    <div class="work_img_two">
                        <img src="images/forgot/footer-form-pattern.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

    <script src="{{asset('js/preloader.js')}}"></script>


</body>

</html>