<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/history_style.css')}}">
        
        <!-- 
        - favicon
        -->
            <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
        
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
                        <a href="{{ route('mypayments') }}">My Payments <i class="uil uil-arrow-right"></i></a>
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

                @if(count($customerBookings) > 0)
                <div class="glow-item">
                    <div class="card shadow-animate" data-tilt>
                        {{-- <h2>Booking History</h2> <br> <br> --}}
                        <h2>My Bookings</h2> <br> <br>

                        <table style="width:100%">
                                <div> <hr> <br>
                                    <tr>
                                        {{-- <th>Customer ID</th>
                                        <th>contact No</th> --}}

                                        <th>Booking Date</th>
                                        <th>Booking Slot</th>
                                        <th>Guest No</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </div>

                                @foreach ($customerBookings as $booking)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($booking->date)->format('d-m-Y') }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->guest_no }}</td>
                                        <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d-m-Y') }} at {{ \Carbon\Carbon::parse($booking->created_at)->format('h:i A') }}</td>

                                        <td class="button-container">
                                            <form action="{{ route('cancel.booking', ['id' => $booking->booking_id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="edit"><p>Cancel</p>
                                                    <span class="icon-wrapper">
                                                        <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                      </span>
                                                </button>
                                            </form>

                                                    {{-- <button type="submit" class="button">
                                                        <div class="trash">
                                                            <div class="top">
                                                                <div class="paper"></div>
                                                            </div>
                                                            <div class="box"></div>
                                                            <div class="check">
                                                                <svg viewBox="0 0 8 6">
                                                                    <polyline points="1 3.4 2.71428571 5 7 1"></polyline>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <span>Cancel</span>
                                                    </button> --}}

                                        </td>
                                @endforeach

                          </table>
                    </div>
                    <p class="copyright">
                        &copy; 2024 FoodHub. All Rights Reserved | Crafted by <a href="https://www.facebook.com/sanket.adhikary.7?mibextid=uzlsIk"
                        target="_blank" class="link">Sanket Adhikary</a>
                    </p>
                
                @else
                <div class="glow-item">
                <div class="card shadow-animate" data-tilt>
                    {{-- <h2>Booking History</h2> <br> <br> --}}
                    <h2>My Bookings</h2> <br> <br>

                    <table style="width:100%">
                            <div> <hr> <br>
                                <tr>
                                    {{-- <th>Booking Date</th>
                                    <th>Booking Slot</th>
                                    <th>Guest No</th>
                                    <th>Date</th>
                                    <th>Action</th> --}}
                                    <p >You Have No Bookings Yet</p>
                                </tr>
                            </div>

                        </table>
                </div>
                <p class="copyright">
                    &copy; 2024 FoodHub. All Rights Reserved | Crafted by <a href="https://www.facebook.com/sanket.adhikary.7?mibextid=uzlsIk"
                    target="_blank" class="link">Sanket Adhikary</a>
                </p>
                @endif
                    

                </div>
            </div>

            


            <script src="{{url('js/history_script.js')}}"></script>
        </body>
</html>