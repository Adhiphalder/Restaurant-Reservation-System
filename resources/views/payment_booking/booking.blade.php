<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Booking</title>
    <link rel="stylesheet" href="{{ url('/css/booking.css') }}">
    <link rel="icon" href="images/favicon.svg">
</head>
<body>
    <nav>
        <div class="nav">
            <a href=""><img src="/images/payment/logo.png" alt=""></a>

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
        </div>
    </nav>
    <div class="main">
        <div class="left">
            <img src="/images/booking/1.jpg" alt="">
        </div> 
        <div class="right">
            <div class="form">
                <form method="POST" action="{{url('/')}}/booking">
                    @csrf
        
                    {{-- <h4>Customer ID : {{ session('customer_id') }}</h4> <br>  --}}

                    @if(session('customer'))
                    <h4>Customer ID : {{ session('customer')->customer_id }}</h4> <br>
                    @endif
                    <div class="form_div">
                        <label for="date">Booking Date</label>
                        <input type="date" name="date" id="date" class="input" required>
                    </div>

                    <div class="form_div">
                        <label for="time">Booking Time</label>
                        <select name="time" id="time" required>
                            <option value="none">Select Time Slot</option>
                            <option value="first">10.00 - 12.00</option>
                            <option value="second">11.00 - 13.00</option>
                            <option value="third">12.00 - 14.00</option>
                            <option value="fourth">13.00 - 15.00</option>
                            <option value="fifth">14.00 - 16.00</option>
                            <option value="sixth">15.00 - 17.00</option>
                            <option value="seventh">16.00 - 18.00</option>
                            <option value="eightth">17.00 - 19.00</option>
                            <option value="ninth">18.00 - 20.00</option>
                            <option value="tenth">19.00 - 21.00</option>
                            <option value="eleventh">20.00 - 22.00</option>
                            <option value="twelvelth">21.00 - 23.00</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label for="guest_no">Guest No.</label>
                        <input type="number" name="guest_no" id="guest_no" placeholder="Guest No." required>
                    </div>

                    <div class="form_div">
                        <label for="gnum">Seat No.</label>
                        <select name="gnum" id="gnum" required>
                            <option value="none">Select seats</option>
                            <option value="twoseater">2 seater</option>
                            <option value="fourseater">4 seater</option>
                            <option value="sixseater">6 seater</option>
                        </select>
                    </div>

                    <div class="form_div_sub">
                        <input type="submit" id="submit">
                        <label for="submit"><button class="submitbtn">Proceed</button></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ url('/js/booking.js') }}"></script>
</body>
</html>