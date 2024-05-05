<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Foodhub</title>

        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

    </head>
    <body>
        <header>
            <a href="#" class="logo"><img src="/images/FoodHub.png"></a>
            <input type="text" placeholder="Search..." id="searchInput">

            <div class="menu">
                <div class="sec-center"> 	
                    <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown"> <i class="fa-solid fa-user"></i> </label> 
                    <div class="section-dropdown"> 
        
                        <div class="profile-img"></div> <br>
                        {{-- <a href="#"><span>ADHIP</span></a><hr> --}}
                        <a href="#"><span>{{ explode(' ', $firstName)[0] }}</span></a><hr>
        
        
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
                <div class="active">
                    <a href="/admin/menu"><li>Menus</li></a>
                </div>
                <a href="/admin/table"><li>Tables</li></a>
                <a href="/admin/reservation"><li>Reservations</li></a>
                <a href="/admin/payment"><li>Payments</li></a>
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

            tbody button {
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
            }

            /* Delete button style */
            tbody button.delete {
                background-color: #FF5252;
                color: white;
                border: none;
            }

        </style>

        <div class="main-body">
            <div class="main_body_heading">
                <h4>MENUS</h4>
                <a href="/admin/addmenu"><button class="add_menu_btn">Add Menu</button></a>
            </div>

            {{-- @if($addmenus->isEmpty()) --}}
            @if($addmenu->isEmpty())
            <p>No Record Found</p>

            {{-- <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Food Description</th>
                            <th>Food Type</th>
                            <th>Veg or Nonveg</th>
                            <th>Type of Non Veg</th>
                            <th>Food Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addmenus as $addmenu)

                            <tr>
                                <td>{{$addmenu->menu_name}}</td>
                                <td>{{$addmenu->menu_description}}</td>
                                <td>
                                    @if ($addmenu->menu_type== "stater")
                                        Staters
                                    @elseif ($addmenu->menu_type== "main_course")
                                        Main Course
                                    @else
                                        Dessert
                                    @endif
                                </td>
                                <td>
                                    @if ($addmenu->veg_or_non_veg== "veg")
                                        Veg
                                    @elseif($addmenu->veg_or_non_veg== "non_veg")
                                        Non Veg
                                    @endif
                                </td>
                                <td>
                                    @if ($addmenu->type_of_non_veg== "chicken")
                                        Chicken
                                    @elseif($addmenu->type_of_non_veg== "motton")
                                        Mutton
                                    @else
                                        Other
                                    @endif
                                </td>
                                <td>
                                    @if ($addmenu->photo)
                                        <img src="{{asset('storage/'.$addmenu->photo)}}" alt="Customer Photo" style="max-width: 100px">                                
                                    @else
                                        No Photo Avaliable
                                    @endif
                                </td>
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
                        @endforeach
                    </tbody>
                </table>
            </div> --}}

            @else
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Food Description</th>
                            <th>Food Type</th>
                            <th>Veg or Nonveg</th>
                            <th>Type of Non Veg</th>
                            <th>Food Image</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addmenu as $menu)

                            <tr>
                                <td>{{$menu->menu_name}}</td>
                                <td>{{$menu->menu_description}}</td>
                                <td>
                                    @if ($menu->menu_type== "stater")
                                        Staters
                                    @elseif ($menu->menu_type== "main_course")
                                        Main Course
                                    @else
                                        Dessert
                                    @endif
                                </td>
                                <td>
                                    @if ($menu->veg_or_non_veg== "veg")
                                        Veg
                                    @elseif($menu->veg_or_non_veg== "non_veg")
                                        Non Veg
                                    @endif
                                </td>
                                <td>
                                    @if ($menu->type_of_non_veg== "chicken")
                                        Chicken
                                    @elseif($menu->type_of_non_veg== "motton")
                                        Mutton
                                    @else
                                        Other
                                    @endif
                                </td>
                                <td>
                                    @if ($menu->photo)
                                        <img src="{{asset('storage/'.$menu->photo)}}" alt="Customer Photo" style="max-width: 100px">                                
                                    @else
                                        No Photo Avaliable
                                    @endif
                                </td>
                                <td>{{$menu->price}}</td>
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