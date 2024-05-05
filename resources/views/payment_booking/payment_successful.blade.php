<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">
    <title>FoodHub</title>
    <link rel="stylesheet" href="{{ url('/css/payment_successful.css') }}">
</head>
<body>

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Foodhub</p>
      </div>

    
    <div class="main">

        <nav>
            <div class="nav">
                <a href="{{ route('home') }}"><img src="/images/payment_successful/logo.png" alt=""></a>


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
            </div>
        </nav>


        <div class="main_part">
            <img src="/images/payment_successful/done.png" alt="" class="main_part_img">
            <h2>Payment Successful</h2>
            <div class="main_part_para">
                {{-- <p>Your payment for (guest_no) guest at (date) on (time) is successfully done.</p> --}}
                {{-- <p class="main_part_sec">Your Payment id #(payment_id)</p> --}}

                <p>Your payment for "{{ session('guest_no') }}" guests at "{{ \Carbon\Carbon::parse(session('date'))->format('d-m-Y') }}" on the time slot of "{{ session('time') }}" is successfully done.</p>
                <p class="main_part_sec">Your Payment id #0000000{{ session('payment_id') }}</p>
            </div>

            <form method="POST" action="{{url('/')}}/pay/successful">
                @csrf
                <div>
                    <label for="review"><p class="review_p">Review</p></label>
                    <textarea name="review" id="review" class="review" cols="72" rows="12" placeholder="Share you experience with us...."></textarea>

                </div>
                <button class="button">OK</button>
            </form>
        </div>
    </div>
    
    <script src="{{asset('js/preloader.js')}}"></script>
</body>
</html>