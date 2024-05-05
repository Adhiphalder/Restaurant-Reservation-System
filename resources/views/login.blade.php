<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>FoodHub</title>
  <meta name="title" content="FoodHub">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">


    <!-- 
    - bootstrap link
  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('css/logstyle.css')}}">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Foodhub</p>
  </div>

  <!-- 
    - body
  -->

  <footer class="footer section has-bg-image text-center"
  style="background-image: url('images/login/footer-bg2 copy.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; width: 100%">

        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
          </div>
        @endif 
    <div id="container" class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="{{url('/')}}" class="logo">
            <img src="images/login/FoodHub.png" width="160" height="50" loading="lazy" alt="FoodHub home">
          </a>

          <div class="input-wrapper">
            <div class="main">  	
              <input type="checkbox" id="chk" aria-hidden="true">
          
                <div class="signup">
                  <form action="{{ route('signup') }}" method="post">
                    @csrf
                    <label for="chk" aria-hidden="true">Sign up</label>

                    <input type="text" name="name" placeholder="Name" value="{{old("name")}}">
                    <span class="text-danger">
                      @error('name')
                          {{$message}}
                      @enderror
                    </span>

                    <input type="email" name="email" placeholder="Email" value="{{old("email")}}" >
                    <span class="text-danger">
                      @error('email')
                      {{$message}}
                      @enderror
                    </span>
                    
                    <input type="tel" name="contact" placeholder="Contact no" maxlength="10"  value="{{old("contact")}}">
                    <span class="text-danger">
                      @error('contact')
                          {{$message}}
                      @enderror
                    </span>
                    
                    <input type="text" name="address" placeholder="Address" value="{{old("address")}}" >
                    <span class="text-danger">
                      @error('address')
                          {{$message}}
                      @enderror
                    </span>

                    <input type="password" name="password" placeholder="Password" >
                    <span class="text-danger">
                      @error('password')
                          {{$message}}
                      @enderror
                    </span>
                    <button type="submit">Sign up</button>
                  </form>
                  <p style="color: white">By Signing in or creating an account you are agreeing to our <span><button style="background: none; border: none; color: skyblue;" onclick="showPopup()"> Terms & Conditions</a></span> </p>
                </div>
          
                <div class="login">
                  <form action= "{{ route('login') }}" method="post">
                    @csrf
                    <label for="chk" aria-hidden="true">Login</label> <br>

                    @if(Session::has('error'))
                      <div class="alert alert-danger" role="alert">
                          {{ Session::get('error') }}
                      </div>
                    @endif
            
                    <input type="email" name="email" placeholder="Email"  value="{{ old('email') }}" required=""> 

                    <input type="password" name="password" placeholder="Password" required="">  
                    <button type="submit" >Login</button>
                  </form>
                  <div style="margin-top: 23px">
                    <a href="/forgot"><button>Forgot Password?</button></a>
                  </div>
                </div>
            </div>
        </div>

        </div>

      <div class="footer-bottom"> </div>
      
    </div>

    <p class="copyright" style="color: white">
      &copy; 2024 FoodHub. All Rights Reserved | Crafted by Adhip Halder
    </p>

    
  </footer>


  <div id="popup" class="popup">
    <div class="bg"></div>
    <div class="terms-box">
        <div class="terms-text">
            <h2>Terms And Conditions</h2>
            <p>Last Edit:01/01/2024</p>
            <p>Greetings User</p>
            <p>
                Table Reservation: By using our reservation system, you agree to abide by the terms and conditions outlined herein. 
                We provide table reservation services for dining at our restaurant.
            </p>

            <p>
                Booking Limit: Each customer is allowed to book a table for a maximum of 6 people. If your party exceeds 
                this limit, please contact us directly for special arrangements.
            </p>

            <p>
                Reservation Confirmation: Your reservation is confirmed only after you receive a confirmation email or SMS from us. 
                Please ensure that the contact information provided during the reservation process is accurate. 
            </p>

            <p>
                Arrival Time: We kindly request that you arrive on time for your reservation. 
                If you are running late, please inform us as soon as possible. We will hold your table for up to 15 minutes past the reserved time, after which we reserve the right to allocate the table to other guests.
            </p>

            <p>
                Cancellation Policy: If you need to cancel or modify your reservation, 
                please do so at least 1 hour before the reserved time. Failure to do so may result in a penalty or forfeiture of your reservation.
            </p>

            <p>
                No-Shows: In the event of a no-show (failure to arrive without prior cancellation), 
                we reserve the right to charge a no-show fee or to refuse future reservations from the same customer. 
            </p>

            <p>
                Special Requests: We will do our best to accommodate any special requests you may have, 
                such as dietary restrictions or seating preferences. Please inform us of any such requests during the reservation process.
            </p>

            <p>
                Alcohol Policy: We comply with all local laws regarding the sale and service of alcohol. 
                Guests must be of legal drinking age to consume alcoholic beverages.
            </p>

            <p>
                Liability: While we take every precaution to ensure the safety and satisfaction of our guests, 
                we cannot be held liable for any loss, damage, injury, or inconvenience experienced during your visit to our restaurant.
            </p>

            <p>
                Changes to Reservation Policy: We reserve the right to modify or update our reservation policy at any time without prior notice. 
                Any changes will be reflected on our website.

            </p>

            <p>
                By making a reservation through our website, you acknowledge that you have read, understood, 
                and agreed to these terms and conditions. If you have any questions or concerns, please contact us for clarification.
            </p>

            <p>Thank you for choosing to dine with us!</p>

            <h4>I Agree To The <span> Terms And Conditions</span> And I Read The Privacy Notice</h4>
            <div class="buttons">
                <button class="btn red-btn" onclick="hidePopup()">Accept</button>
                <button class="btn gray-btn" onclick="hidePopup()">Decline</button>
            </div>

        </div>
    </div>

  </div>

 


  <!-- 
    - custom js link
  -->
  <script src="{{asset('js/log.js')}}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
