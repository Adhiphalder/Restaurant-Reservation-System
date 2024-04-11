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
                <div class="menu">
                    <div class="sec-center"> 	
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                        <label class="for-dropdown" for="dropdown"> <i class="fa-solid fa-bars"></i> </label> 
                        <div class="section-dropdown"> 
                            <a href="{{url('bookhis')}}">My Bookings <i class="uil uil-arrow-right"></i></a>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
                            <div class="section-dropdown-sub"></div>
                            {{-- <a href="">Logout <i class="uil uil-arrow-right"></i></a> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                            
                            <!-- Add a button or link to trigger the logout form -->
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

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
                </div>
            </div>

            <script src="{{url('js/profile_script.js')}}"></script>
        </body>
</html>