<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{url('/')}}/indexpost">
        @csrf
        <div class="form-group">
            <label for="exampleInputDate">Date</label>
            <input type="date" name="date" class="form-control" id="exampleInputDate" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputTime">Time</label>
            <input type="time" name="time" class="form-control" id="exampleInputTime" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputGuest">Guest No</label>
            <input type="number" name="guest" class="form-control" id="exampleInputGuest" placeholder="Guest No">
        </div>
        <div class="form-group">
            <label for="exampleInputDate">Seat No.</label>
            <input type="number" name="seat" class="form-control" id="exampleInputDate" placeholder="Seat No.">
        </div>
        <div class="form-group">
            <label for="exampleInputTable">Table No.</label>
            <input type="number" name="table" class="form-control" id="exampleInputTable" placeholder="Seat No.">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>
</html>