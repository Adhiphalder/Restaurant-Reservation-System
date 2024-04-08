<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{url('/')}}/indexonepost">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputContact">Contact No.</label>
            <input type="number" name="contact" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Contact No.">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword" aria-describedby="emailHelp" placeholder="Enter Password}">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>
</html>