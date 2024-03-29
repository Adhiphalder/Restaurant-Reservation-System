<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>FoodHub</title>
  <meta name="title" content="FoodHub">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('css/logstyle.css')}}">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Foodhub</p>
  </div>

  <!-- 
    - body
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('images/login/footer-bg2 copy.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="images/login/FoodHub.png" width="160" height="50" loading="lazy" alt="FoodHub home">
          </a>

          <div class="input-wrapper">
            <div class="main">  	
              <input type="checkbox" id="chk" aria-hidden="true">
          
                <div class="signup">
                  <form>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="txt" placeholder="First name" required="">
                    <input type="text" name="txt" placeholder="Last name" required="">
                    <input type="tel" name="phn" placeholder="Contact no" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="pswd" placeholder="Password" required="">
                    <button>Sign up</button>
                  </form>
                  <p>By Signing in or creating an account you are agreeing to our <span><a href="#"> Terms & Conditions</a></span> </p>
                </div>
          
                <div class="login">
                  <form>
                    <label for="chk" aria-hidden="true">Login</label> <br>
                    <input type="password" name="pswd" placeholder="Password" required="">  
                    <input type="email" name="email" placeholder="Email" required=""> 
                    <button>Login</button>
                  </form>
                </div>
            </div>
        </div>

        </div>

      <div class="footer-bottom"> </div>
      
    </div>

    <p class="copyright">
      &copy; 2024 FoodHub. All Rights Reserved | Crafted by
    </p>

  </footer>
 

  <!-- 
    - custom js link
  -->
  <script src="{{asset('js/log.js')}}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>