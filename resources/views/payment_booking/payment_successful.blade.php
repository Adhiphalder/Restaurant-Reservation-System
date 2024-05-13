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

                {{-- <h4>Booking ID: {{ session('booking_id') }}</h4> --}}


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

                <p>Your payment for "{{ session('guest_no') }}" guests at "{{ \Carbon\Carbon::parse(session('date'))->format('d-m-Y') }}" on the time slot of 
                    
                    @if (session('time') == 'first')
                        "10.00 - 12.00"
                    @endif
                    @if (session('time') == 'second')
                        "11.00 - 13.00"
                    @endif
                    @if (session('time') == 'third')
                        "12.00 - 14.00"
                    @endif
                    @if (session('time') == 'fourth')
                        "13.00 - 15.00"
                    @endif
                    @if (session('time') == 'fifth')
                        "14.00 - 16.00 " 
                    @endif
                    @if (session('time') == 'sixth')
                        "15.00 - 17.00"
                    @endif
                    @if (session('time') == 'seventh')
                        "16.00 - 18.00"
                    @endif
                    @if (session('time') == 'eightth')
                        "17.00 - 19.00"
                    @endif
                    @if (session('time') == 'ninth')
                        "18.00 - 20.00"
                    @endif
                    @if (session('time') == 'tenth')
                        "19.00 - 21.00"
                    @endif
                    @if (session('time') == 'eleventh')
                        "20.00 - 22.00"
                    @endif
                    @if (session('time') == 'twelvelth')
                        "21.00 - 23.00"
                    @endif
                    
                     is successfully done.</p>
                <p class="main_part_sec">Your Transaction ID is #0000000{{ session('payment_id') }}</p>
            </div> <br>
            
            <a href="{{ route('invoice') }}">
                <button class="download-btn pixel-corners">
                    <div class="button-content">
                      <div class="svg-container">
                        <svg
                          class="download-icon"
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479 6.908l-4-4h3v-4h2v4h3l-4 4z"
                          ></path>
                        </svg>
                      </div>
                      <div class="text-container">
                        <div class="text">Download Invoice</div>
                      </div>
                    </div>
                  </button>
            </a>
            <br>

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