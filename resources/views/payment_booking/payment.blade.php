<!DOCTYPE html>
<html lang="en">
  
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Summary</title>
    <link rel="stylesheet" href="{{ url('/css/payment.css') }}">
    <link rel="icon" href="">
</head>

<body>
    <nav>
        <div class="nav">
            <a href=""><img src="img/logo.png" alt=""></a>
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
                            <div>Mriganka Adhikary</div>
                        </div>

                        <div class="left_first_top_book_div">
                            <div>Booking Date</div>
                            <div>10.12.2024</div>
                        </div>

                        <div class="left_first_top_book_div">
                            <div>Booking Time Slot</div>
                            <div>20.00 - 21.00</div>
                        </div>

                        <div class="left_first_top_book_div">
                            <div>Seat No.</div>
                            <div>2 seater</div>
                        </div>

                        <div class="left_first_top_book_div">
                            <div>Table No.</div>
                            <div>011</div>
                        </div>
                    </div>

                    <button id="pcedtocout">Proceed to Checkout</button>

                </div>

                <div class="left_first_bottom">
                    <h2>Choose your payment options</h2>
                    <div>
                        <form action="get">
                            <div class="form_first_child">
                                <input type="radio" name="p_method" id="p_method_upi" required>
                                <label for="p_method_upi">
                                    <span>UPI</span>
                                    <div class="p_method_upi_main">
                                        <input type="email" name="" id="p_method_upi_space" placeholder="Enter your VPA">
                                        <label for="submit1"><button class="button">Pay ₹200</button></label>
                                    </div>
                                </label>
                            </div>
                            <div class="form_sec_child">
                                <input type="radio" name="p_method" id="p_method_card" required>
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