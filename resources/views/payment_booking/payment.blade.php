<!DOCTYPE html>
<html lang="en">
  
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">
    <title>FoodHub</title>
    <link rel="stylesheet" href="{{ url('/css/payment.css') }}">
    <link rel="icon" href="">
</head>

<body>

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Foodhub</p>
      </div>

    
    <nav>
        <div class="nav">
            <a href="{{ route('home') }}"><img src="/images/payment/logo.png" alt=""></a>

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
    <main>  
        <div class="body">
            <div class="left">
                <div class="left_first_top">

                    {{-- <h4>Booking ID: {{ session('booking_id') }}</h4> --}}

                    <h2>Booking Summary</h2>
                        <div class="left_first_top_book">
                            @if(session('customer'))
                                <div class="left_first_top_book_div">
                                    <div>Name</div>
                                    <div>{{ session('customer')->name }}</div>
                                </div>
                            @endif
                        
                            @if(session('booking_date'))
                                <div class="left_first_top_book_div">
                                    <div>Booking Date</div>
                                    {{-- <div>{{ session('booking_date') }}</div> --}}
                                    <div>
                                        @php
                                            $bookingDate = \Carbon\Carbon::parse(session('booking_date'))->format('d-m-Y');
                                        @endphp
                                        {{ $bookingDate }}
                                    </div>
                                </div>
                            @endif
                        
                            @if(session('booking_time'))
                                <div class="left_first_top_book_div">
                                    <div>Booking Time Slot</div>
                                    <div>
                                        @if (session('booking_time') == 'first')
                                            10.00 - 12.00
                                        @endif
                                        @if (session('booking_time') == 'second')
                                            11.00 - 13.00
                                        @endif
                                        @if (session('booking_time') == 'third')
                                            12.00 - 14.00
                                        @endif
                                        @if (session('booking_time') == 'fourth')
                                            13.00 - 15.00
                                        @endif
                                        @if (session('booking_time') == 'fifth')
                                            14.00 - 16.00  
                                        @endif
                                        @if (session('booking_time') == 'sixth')
                                            15.00 - 17.00
                                        @endif
                                        @if (session('booking_time') == 'seventh')
                                            16.00 - 18.00
                                        @endif
                                        @if (session('booking_time') == 'eightth')
                                            17.00 - 19.00
                                        @endif
                                        @if (session('booking_time') == 'ninth')
                                            18.00 - 20.00
                                        @endif
                                        @if (session('booking_time') == 'tenth')
                                            19.00 - 21.00
                                        @endif
                                        @if (session('booking_time') == 'eleventh')
                                            20.00 - 22.00
                                        @endif
                                        @if (session('booking_time') == 'twelvelth')
                                            21.00 - 23.00
                                        @endif
                                    </div>
                                </div>
                            @endif
                        
                            @if(session('guest_no'))
                                <div class="left_first_top_book_div">
                                    <div>Total Guest No.</div>
                                    <div>{{ session('guest_no') }}</div>
                                </div>
                            @endif

                            @if(session('seat_no'))
                                @if(session('add_seat_no') !== null)
                                    <div class="left_first_top_book_div">
                                        <div>Seat No.</div>
                                        <div>{{ session('seat_no') }} +
                                            @if(session('add_seat_no') != '')
                                                <span>{{ session('add_seat_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="left_first_top_book_div">
                                        <div>Seat No.</div>
                                        <div>{{ session('seat_no') }}</div>
                                    </div>
                                @endif
                            @endif

                            <div class="left_first_top_book_div">
                                <div>Table No.</div>
                                <div>{{ session('table_no') }}</div>
                            </div>
                        </div>
                        

                        <button id="pcedtocout" class="button">Proceed to Checkout</button>

                    </div>

                    <div class="left_first_bottom">
                        <h2>Choose your payment options</h2>
                        <div>
                            <form method="POST" action="{{url('/')}}/payment">
                                
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ Session::get('booking_id') }}">
                                <div class="form_first_child">
                                    <input type="radio" name="p_method" id="p_method_upi" value="upi" required>
                                    <label for="p_method_upi">
                                        <span>UPI</span>
                                        <div class="p_method_upi_main">
                                            <input type="email" name="upi_vpa" id="p_method_upi_space" placeholder="Enter your VPA" required>
                                            <button type="submit" class="Btn" >Pay ₹200  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
                                        </div>
                                    </label>
                                </div>
                                <div class="form_sec_child">
                                    <input type="radio" name="p_method" id="p_method_card" value="card" required>
                                    <label for="p_method_card">
                                        <span>Credit / Debit / ATM Card</span>
                                        <div class="p_method_card_main">
                                            <div>
                                                <input type="tel" name="card_number" id="p_method_card_space" placeholder="Enter Card Number" maxlength="16" required>
                                            </div>
                                            <div>
                                                {{-- <input type="text" name="card_exp" id="p_method_card_exp" placeholder="MM/YY" maxlength="5" required> --}}
                                                <input type="text" name="card_exp" id="p_method_card_exp" placeholder="MM/YY" maxlength="5" required oninput="formatExpirationDate(event)">
                                                <input type="password" name="card_ccv" id="p_method_card_ccv" maxlength="4" placeholder="CCV" required>
                                            </div>
                                            <div>
                                                <button type="submit" class="Btn">Pay ₹200  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </form>

                            
                        </div>
                    </div>
            </div>
                <div class="right">
                    <h2>Price Details</h2>
                    <div class="right_top">
                        <div class="right_top_div">
                            <div>Booking Ammount</div>
                            <div>₹200</div>
                        </div>
                        <div class="right_top_div">
                            <div>Taxation</div>
                            <div>No Charges</div>
                        </div>
                    </div>
                    <div class="right_bottom">
                        <div>Ammount Payble</div>
                        <div>₹200</div>
                    </div>
                </div>
            </div>
    </main>


    <script src="{{ url('/js/payment.js') }}"></script>

    <script src="{{asset('js/preloader.js')}}"></script>

</body>

</html>