<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/profile_style.css')}}">
        
        <!-- 
        - favicon
        -->
        <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">
        
        <!-- 
        google font link
        -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
        
        <title>FoodHub</title>
</head>
<body>

            
            <!-- 
                - #PRELOADER
            -->

            <div class="preload" data-preaload>
                <div class="circle"></div>
                <p class="text">Foodhub</p>
            </div>


            
            <div class="container">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="images/FoodHub.png" alt=""></a>
                </div>
                <div class="menu1">
                    <div class="sec-center"> 	
                        <input class="dropdown1" type="checkbox" id="dropdown1" name="dropdown1"/>
                        <label class="for-dropdown1" for="dropdown1"> <i class="fa-solid fa-bars"></i>   </label>
                        <div class="section-dropdown1"> 
                            <a href="{{ route('mybookings') }}">My Bookings <i class="uil uil-arrow-right"></i></a>
                            <input class="dropdown1-sub" type="checkbox" id="dropdown1-sub" name="dropdown1-sub"/>
                            <div class="section-dropdown1-sub"></div>
                            <a href="profile">Profille <i class="uil uil-arrow-right"></i></a>
                            {{-- <a href="logout">Logout <i class="uil uil-arrow-right"></i></a> --}}
                            <form action="{{ route('logout') }}" method="post">
                              @csrf
    
                              {{-- <a href=""><button type="submit">Logout <i class="uil uil-arrow-right"></i></button></a> --}}
                              <button type="submit" class="logout-btn">Logout <i class="uil uil-arrow-right"></i></button>
                          </form>
    
                        </div>
                    </div>
                </div>
                <div class="glow-item">
                    <div class="card shadow-animate" data-tilt>
                        <img src="images/profile/profile.png">

                        @if(session('customer'))
                        <h2>{{ session('customer')->name }}</h2>
                        <p>Email Id : {{ session('customer')->email }}</p>
                        <p>Contact : {{ session('customer')->contact }}</p>
                        <p>Address : {{ session('customer')->address }}</p>
                        @endif
                        <a href="#" class="btn">Edit </a>
                    </div>
                    <span class="copyright">
                        &copy; 2024 FoodHub. All Rights Reserved | Crafted by <a href="https://www.facebook.com/sanket.adhikary.7?mibextid=uzlsIk"
                        target="_blank" class="link">Sanket Adhikary</a>
                    </span>
                </div>


            <script src="{{url('js/profile_script.js')}}"></script>
        </body>
</html>