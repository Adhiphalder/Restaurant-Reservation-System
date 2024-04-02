<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table</title>
    <link rel="stylesheet" href="{{ url('/css/booktable.css') }}">
    <link rel="icon" href="images/favicon.svg">
</head> 
<body>
     <div class="main">
        <div class="left">
            <img src="/images/booktable/3.jpg" alt="">
        </div>
        <div class="right">
            <div class="form">
                <form action="get">
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