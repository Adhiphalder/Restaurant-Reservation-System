<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodHub</title>
    <link rel="stylesheet" href="{{ url('/css/addtable.css') }}">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">
</head>
<body>
    <div class="body">
        <div class="work">
            <div class="left">
                <img src="/images/table/img.jpg" alt="" class="left_img">
            </div>
            <div class="right">
                @if ($errors->any())
                    <div class="error-message">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif <br>
                    <form method="POST" action="{{$url}}">
                        @csrf
                    <div class="right_sec">
                        <label for="table_no">Enter Table No.</label>
                        <input type="number" name="table_no" id="table_no" class="table_no" placeholder="Enter Table No." value="{{ isset($table) ? old('table_no', $table->table_no) : '' }}" required>
                    </div>
    

                    <div class="right_sec">
                        <label for="table_seat_no">Enter Seat No.</label>
                        <select name="table_seat_no" id="table_status" class="table_status">
                            <option value="null">Select seats</option>
                            <option value="2" {{ isset($table) && old('table_seat_no', $table->table_seat_no) == 2 ? 'selected' : '' }}>2 seater</option>
                            <option value="4" {{ isset($table) && old('table_seat_no', $table->table_seat_no) == 4 ? 'selected' : '' }}>4 seater</option>
                            <option value="6" {{ isset($table) && old('table_seat_no', $table->table_seat_no) == 6 ? 'selected' : '' }}>6 seater</option>
                            <option value="8" {{ isset($table) && old('table_seat_no', $table->table_seat_no) == 8 ? 'selected' : '' }}>8 seater</option>
                        </select>
                    </div>

                    <div class="right_sec">
                        <label for="table_status">Table Status</label>
                        <select name="table_status" id="table_status" class="table_status">
                            <option value="emp" {{ isset($table) ? old('table_status', $table->table_book_status) == 'emp' ? 'selected' : '' : '' }}>Empty</option>
                            <option value="resv" {{ isset($table) ? old('table_status', $table->table_book_status) == 'resv' ? 'selected' : '' : '' }}>Reserved</option>
                        </select>
                    </div>
                    
                    <div class="sub_button">
                        {{-- <button class="button">Add Table</button> --}}
                        <button class="button">{{$title}}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>