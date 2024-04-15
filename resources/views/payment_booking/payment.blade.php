<!DOCTYPE html>
<html lang="en">
  
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Booking Summary</title>
    <link rel="stylesheet" href="{{ url('/css/payment.css') }}">
    <link rel="icon" href="">
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
    <main>  
        <div class="body">
            <div class="left">
                <div class="left_first_top">
                    <h2>Booking Summary</h2>
                    <div class="left_first_top_book">

                            <div class="left_first_top_book_div">
                                <div>Name</div>
                                <div>Adhip Halder</div>
                            </div>

                            <div class="left_first_top_book_div">
                                <div>Booking Date</div>
                                <div>16.04.2024</div>
                            </div>

                            <div class="left_first_top_book_div">
                                <div>Booking Time Slot</div>
                                <div>10.00 - 12.00</div>
                            </div>

                            <div class="left_first_top_book_div">
                                <div>Total Guest No.</div>
                                <div>2</div>
                            </div>

                            <div class="left_first_top_book_div">
                                <div>Seat No.</div>
                                <div>2 Seater</div>
                            </div>

                            <div class="left_first_top_book_div">
                                <div>Table No.</div>
                                <div>021</div>
                            </div>
                        </div>

                        <button id="pcedtocout">Proceed to Checkout</button>

                    </div>

                    <div class="left_first_bottom">
                        <h2>Choose your payment options</h2>
                        <div>
                            <form method="POST" action="{{url('/')}}/payment">
                                @csrf
                                <div class="form_first_child">
                                    <input type="radio" name="p_method" id="p_method_upi" value="upi" required>
                                    <label for="p_method_upi">
                                        <span>UPI</span>
                                        <div class="p_method_upi_main">
                                            <input type="email" name="" id="p_method_upi_space" placeholder="Enter your VPA">
                                            <label for="submit1"><button class="button">Pay ₹200</button></label>
                                        </div>
                                    </label>
                                </div>
                                <div class="form_sec_child">
                                    <input type="radio" name="p_method" id="p_method_card" value="card" required>
                                    <label for="p_method_card">
                                        <span>Credit / Debit / ATM Card</span>
                                        <div class="p_method_card_main">
                                            <div>
                                                <input type="tel" name="" id="p_method_card_space"
                                                    placeholder="Enter Card Number" maxlength="16">
                                            </div>
                                            <div>
                                                <input type="text" name="" id="p_method_card_exp" placeholder="MM/YY">
                                                <input type="password" name="" id="p_method_card_ccv" maxlength="4"
                                                    placeholder="CCV">
                                            </div>
                                            <div>
                                                <input type="submit" name="" id="submit1">
                                                <label for="submit1"><button class="button">Pay ₹200</button></label>
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
</body>

</html>