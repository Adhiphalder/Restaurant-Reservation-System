<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodHub</title>
  {{-- <link rel="stylesheet" href="style.css" type="text/css" media="all" /> --}}
  <link rel="stylesheet" href="{{ url('/css/invoice.css') }}">
  <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">

</head>

<body>
  <div>
    <div class="py-4">
      <div class="px-14 py-6">
        <table class="w-full border-collapse border-spacing-0">

          
          <button class="print-button" onclick="printInvoice()"><span class="print-icon"></span><p>PRINT </p></button>

          <tbody>
            <tr>
              <td class="w-full align-top">
                <div>
                  {{-- <img src="FoodHub copy.png" class="h-12" /> --}}
                <img src="/images/payment_successful/foodhub.png" class="h-12">

                </div>
              </td>

              <td class="align-top">
                <div class="text-sm">
                  <table class="border-collapse border-spacing-0">
                    <tbody>
                      <tr>
                        <td class="border-r pr-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                            <p class="whitespace-nowrap font-bold text-main text-right">{{ $date }}</p>
                          </div>
                        </td>
                        <td class="pl-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Invoice </p>
                            <p class="whitespace-nowrap font-bold text-main text-right">{{ $invoiceId }}</p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bg-slate-100 px-14 py-6 text-sm">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-1/2 align-top">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold">BILL TO</p>
                  <p>Name : {{ $customerName }}</p>
                  <p>Number : {{ $customerContact }}</p>
                  <p>Address : {{ $customerAddress }}</p>
                </div>
              </td>

              <td class="w-1/2 align-top text-right">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold">BOOKING DETAILS</p>
                  <p>Transaction ID : #{{ $paymentId }}</p>
                  <p>Due Date: {{ $dueDate }}</p>
                  <p> Time Slot :
                    @if (session('time') == 'first')
                    10.00 - 12.00
                    @endif
                    @if (session('time') == 'second')
                        11.00 - 13.00
                    @endif
                    @if (session('time') == 'third')
                        12.00 - 14.00
                    @endif
                    @if (session('time') == 'fourth')
                        13.00 - 15.00
                    @endif
                    @if (session('time') == 'fifth')
                        14.00 - 16.00 
                    @endif
                    @if (session('time') == 'sixth')
                        15.00 - 17.00
                    @endif
                    @if (session('time') == 'seventh')
                        16.00 - 18.00
                    @endif
                    @if (session('time') == 'eightth')
                        17.00 - 19.00
                    @endif
                    @if (session('time') == 'ninth')
                        18.00 - 20.00
                    @endif
                    @if (session('time') == 'tenth')
                        19.00 - 21.00
                    @endif
                    @if (session('time') == 'eleventh')
                        20.00 - 22.00
                    @endif
                    @if (session('time') == 'twelvelth')
                        21.00 - 23.00
                    @endif
                  </p>
                  <p>Guest No : {{ $guestNo }}</p>
                </div>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <table class="w-full border-collapse border-spacing-0">
          <thead>
            <tr>
              <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Description</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Pay Method</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">TAX</td>
              <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Subtotal + TAX</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border-b py-3 pl-2">Booking amount</td>
              <td class="border-b py-3 pl-2 text-center">{{ strtoupper($paymentMethod) }}</td>
              <td class="border-b py-3 pl-2 text-right">200 ₹</td>
              <td class="border-b py-3 pl-2 text-center">0%</td>
              <td class="border-b py-3 pl-2 pr-3 text-right">200 ₹</td>
            </tr>
            <tr>
              <td colspan="7">
                <table class="w-full border-collapse border-spacing-0">
                  <tbody>
                    <tr>
                      <td class="w-full"></td>
                      <td>
                        <table class="w-full border-collapse border-spacing-0">
                          <tbody>
                            <tr>
                              <td class="bg-main p-3">
                                <div class="whitespace-nowrap font-bold text-white">Total :</div>
                              </td>
                              <td class="bg-main p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-white">200 ₹</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="px-14 text-sm text-neutral-700">
        <p class="text-main font-bold">FOODHUB</p>
        <p>Email : booking@restaurant.com</p>
        <p>Contact No : +123 456 789</p>
        <p>Address : Chinsurah, Hooghly.</p>
        <p>Pincode : 712104</p>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <p class="text-main font-bold">Terms & Conditions</p>
        <p class="italic">By using our reservation system, you agree to abide by the terms and conditions outlined herein. 
          We provide table reservation services for dining at our restaurant.</p>
        </div>

        <footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
          FoodHub
          <span class="text-slate-300 px-2">|</span>
          booking@restaurant.com
          <span class="text-slate-300 px-2">|</span>
          +123 456 789
        </footer>
      </div>
    </div>

    <script>
        function printInvoice() {
          window.print(); // Trigger printing
        }
      </script>
</body>

</html>
