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
  <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">


    <!-- 
    - bootstrap link
  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ url('/css/adminlogin.css') }}">

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

  <footer class="footer section has-bg-image text-center" style="background-image: url('/images/login/footer-bg2 copy.jpg')">

        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
          </div>
        @endif 
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="/images/login/FoodHub.png" width="160" height="50" loading="lazy" alt="FoodHub home">
          </a>

          <div class="input-wrapper">
            <div class="main">  	
              <input type="checkbox" id="chk" aria-hidden="true">
          
                <div class="signup">
                  <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <label  aria-hidden="true">Welcome Admin</label>

                    <input id="admin_id" type="text" name="admin_id" placeholder="Admin ID" value="{{ old('admin_id') }}" required autofocus>
                    <span class="text-danger">
                      @error('name')
                          {{$message}}
                      @enderror
                    </span>

                    {{-- <input type="email" name="email" placeholder="Email" value="{{old("email")}}" >
                    <span class="text-danger">
                      @error('email')
                      {{$message}}
                      @enderror
                    </span>
                    
                    <input type="tel" name="contact" placeholder="Contact no"  value="{{old("contact")}}">
                    <span class="text-danger">
                      @error('contact')
                          {{$message}}
                      @enderror
                    </span>
                    
                    <input type="text" name="address" placeholder="Address" value="{{old("address")}}" >
                    <span class="text-danger">
                      @error('address')
                          {{$message}}
                      @enderror
                    </span> --}}

                    <input type="password" name="password" placeholder="Password" >
                    <span class="text-danger">
                      @error('password')
                          {{$message}}
                      @enderror
                    </span>
                    <button type="submit">Login</button>
                  </form>
                  {{-- <p>By Signing in or creating an account you are agreeing to our <span><a href="#"> Terms & Conditions</a></span> </p> --}}
                </div>
            </div>
        </div>

        </div>

      <div class="footer-bottom"> </div>
      
    </div>

    <p1 class="copyright">
      &copy; 2024 FoodHub. All Rights Reserved | Crafted by Adhip Halder
    </p1>

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
