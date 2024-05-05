<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FoodHub</title>
    <link rel="stylesheet" href="{{ url('/css/booktable.css') }}">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">


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
                    <a href="profile">Profile <i class="uil uil-arrow-right"></i></a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="logout-btn">Logout <i class="uil uil-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="main">
    <div class="left">
        <img src="/images/booktable/3.jpeg" alt="" class="left_image">
    </div>
    <div class="right">
        <div class="form">
                <form method="POST" action="{{ route('booktable.store') }}">
                @csrf

                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                @if(session('customer'))
                <h4>Customer ID : {{ session('customer')->customer_id }}</h4> <br>
                @endif

                @if(session('booking'))
                <h4>Booking ID: {{ session('booking')->booking_id }}</h4> <br>
                @endif --}}


                <div class="form_opt">
                    {{-- <label for="table_no">Choose your Table</label> --}}
                    <div class="table_no_div" id="form_div">
                        @if (Session::has('no_tables_available'))
                            <p>No Table Available</p>
                            {{-- <select name="table_no" class="table_no" id="table_no" disabled>
                                <option value="none" selected>Select a table</option>
                            </select> --}}

                        @else
                    <label for="table_no">Choose your Table</label>
                            <select name="table_no" class="table_no" id="table_no" required>
                                <option value="none">Select a table</option>
                                @foreach ($availableTables as $table)
                                    <option value="{{ $table->table_id }}" {{ old('table_no') == $table->table_id? 'selected' : '' }}>Table No. {{ $table->table_no }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <input type="hidden" name="table_id" id="table_id">
                    <div class="sub_btn">
                        <button type="submit" class="button">Proceed to Checkout</button>
                    </div>
                    @endif
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('table_no').addEventListener('change', function() {
        var selectedTableId = this.value;
        console.log("Selected table ID:", selectedTableId);
        document.getElementById('table_id').value = selectedTableId;
        console.log("Hidden input value:", document.getElementById('table_id').value);
    });
</script>

<script src="{{asset('js/preloader.js')}}"></script>

</body>
</html>
