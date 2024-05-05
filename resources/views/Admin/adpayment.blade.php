<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/adpayment.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>FoodHub</title>

        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

    </head>
    <body>
        <header>
            <a href="/" class="logo"><img src="{{asset('images/FoodHub.png')}}"></a>
            <input type="text" placeholder="Search..." id="searchInput">

            <div class="menu">
                <div class="sec-center"> 	
                    <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown"> <i class="fa-solid fa-user"></i> </label> 
                    <div class="section-dropdown"> 
        
                        <div class="profile-img"></div> <br>
                        {{-- <a href="#"><span>ADHIP</span></a><hr> --}}
                        <a href="#"><span>{{ $firstName }}</span></a><hr>
        
        
                        <a href="#">Profile</a>
                        <div class="section-dropdown-sub"></div>
                        {{-- <a href="#">Sign Out</a> --}}
                        <a href="{{ route('admin.logout') }}">Sign Out</a>
        
                    </div>
                </div>
            </div>

        </header>

        <nav role="navigation">
            <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">

                <a href="/admin/customer"><li>Customers</li></a>
                <a href="/admin/menu"><li>Menus</li></a>
                <a href="/admin/table"><li>Tables</li></a>
                <a href="/admin/reservation"><li>Reservations</li></a>
                <div class="active">
                    <a href=""><li>Payments</li></a>
                </div>
                <a href="/admin/bookcancle"><li>Booking Cancellation</li></a>
            </ul>
            </div>
        </nav>

        <style>
            .table-container {
                width: 90%;
                max-height: 400px;
                overflow: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                margin: 5px auto;
                margin-top: 20px;
                text-align: center;
            }

            .table-container::-webkit-scrollbar {
                display: none;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                border-radius: 8px;
                overflow: hidden;
                
            }

            th, td {
                text-align: left;
                padding: 12px;
            }

            th {
                background-color: #436B95;
                text-align: center;
                font-weight: bold;
                color: #CCCCFF;
            }

            tbody td {
                font-weight: bold;
                color: #BEC0D6;
                text-align: center;
            }

            .button-container {
                display: flex;
                justify-content: center; 
                align-items: center; 
            }

            /* tbody button {
                cursor: pointer;
                padding: 13px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 8px;
                border-radius: 8px;
                transition: background-color 0.3s;
            }

            tbody button.edit {
                background-color: #1D458A;
                color: white;
                border: none;
                font-weight: bold;
            }

            tbody button.edit:hover {
                background-color: #14336D;
            } */

        </style>

        <div class="main-body">
            <h4>PAYMENT</h4>

            @if($payments->isEmpty())
            <p class="main-body-p">No Record Found</p>
            {{-- <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th> Contact No</th>
                            <th> Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
    
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="button-container">
                                    <button class="edit">Edit</button>
                                    <button class="button">
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
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div> --}}


            @else
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Booking ID</th>
                            <th> Amount</th>
                            <th> Pay Method</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{ $payment->customer_id }}</td>
                                <td>{{ $payment->booking_id }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->paymethod }}</td>
                                {{-- <td>{{ $payment->current_time }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($payment->current_time)->format('d-m-Y') }} at {{ \Carbon\Carbon::parse($payment->current_time)->format('h:i A') }}</td>
                                <td class="button-container">
                                    {{-- <button class="edit">Edit</button> --}}
                                    {{-- <button class="button">
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
                                        <span>Delete</span>
                                    </button> --}}

                                    <button type="submit" class="delete"><p class="button-container-p">Delete</p>
                                        <span class="icon-wrapper">
                                            <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif

        </div>

        
            
    </div>

        <script src="{{asset('js/customer.js')}}"></script>
    </body>
</html>