    <!DOCTYPE html>
    <html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
            <!-- 
            - favicon
            -->
            <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <title>Foodhub</title>
        <link rel="stylesheet" href="{{ url('/css/booktable.css') }}">
        <link rel="icon" href="images/favicon.svg">
    </head> 
    <body>
        <nav>
            <div class="nav">
                <a href="{{ route('home') }}"><img src="/images/payment/logo.png" alt=""></a>

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

                
            </div>
        </nav>
        <div class="main">
            <div class="left">
                <img src="/images/booktable/3.jpeg" alt="">
            </div>
            <div class="right">
                <div class="form">
                    <form >
                        <div class="form_opt">
                            <label for="table_no">Choose your Table</label>
                            <select name="table_no" id="table_no" required>
                                <option value="none">Select an option</option>
                                <option value="table_no_one">Table No. 1</option>
                                <option value="table_no_two">Table No. 2</option>
                                <option value="table_no_three">Table No. 3</option>
                                <option value="table_no_four">Table No. 4</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="submit"><button class="btn">Proceed to Checkout</button></label>
                            <input type="submit" name="" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>