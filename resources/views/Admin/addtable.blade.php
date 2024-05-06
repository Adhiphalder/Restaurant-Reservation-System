<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodhub</title>
    <link rel="stylesheet" href="{{ url('/css/addtable.css') }}">
</head>
<body>
    <div class="body">
        <div class="work">
            <div class="left">
                <img src="/images/table/img.jpg" alt="" class="left_img">
            </div>
            <div class="right">
                <form method="POST" action="{{url('/')}}/admin/addtable">
                    @csrf
                    <div class="right_sec">
                        <label for="table_no">Enter Table No.</label>
                        <input type="number" name="table_no" id="table_no" class="table_no" placeholder="Enter Table No." required>
                    </div>
    
                    <div class="right_sec">
                        <label for="table_seat_no">Enter Seat No.</label>
                        <select type="number" name="table_seat_no" id="table_seat_no" class="table_seat_no" required>
                            <option value="null">Select seats</option>
                            <option value="2">2 seater</option>
                            <option value="4">4 seater</option>
                            <option value="6">6 seater</option>
                            <option value="8">8 seater</option>
                        </select>
                    </div>

                    <div class="right_sec">
                        <label for="table_status">Table Status</label>
                        <select name="table_status" id="table_status" class="table_status">
                            <option value="none">Select Table Status</option>
                            <option value="emp">Empty</option>
                            <option value="resv">Reserved</option>
                        </select>
                    </div>

                    <div class="sub_button">
                        <button class="button">Add Table</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>