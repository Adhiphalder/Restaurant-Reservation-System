<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/admenuform.css') }}">
    <title>Foodhub</title>
</head>
<body>
    <div class="body">
        <p class="heading">ADD MENU</p>
        <form method="POST" action="{{url('/')}}/admin/menu" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="menu_type">
                    <span>Menu type : </span>
                    <input type="radio" name="menu_type" class="menu_type" id="stater" value="stater">
                    <label for="stater">Staters</label>
                    <input type="radio" name="menu_type" class="menu_type" id="main_course" value="main_course">
                    <label for="main_course">Menu Course</label>
                    <input type="radio" name="menu_type" class="menu_type" id="dessert"  value="dessert">
                    <label for="dessert">Dessert</label>
                    <br>
                </div>
            </div><br>
    
            <div class="form-group">
                <div class="veg-non">
                    <span>Veg or Non-veg : </span>
                    <input type="radio" name="veg_or_non" class="veg_or_non" id="veg" value="veg">
                    <label for="veg">Veg</label>
                    <input type="radio" name="veg_or_non" class="veg_or_non" id="non-veg" value="non_veg">
                    <label for="non-veg">Non-veg</label>
                    <br>
                </div>
            </div><br>
    
            <div class="form-group">
                <div class="type-non-veg">
                    <span>Type of Non-veg : </span>
                    <input type="radio" name="type_of_non_veg" class="type_of_non_veg" id="chicken" value="chicken">
                    <label for="chicken">Chicken</label>
                    <input type="radio" name="type_of_non_veg" class="type_of_non_veg" id="motton" value="motton">
                    <label for="motton">Motton</label>
                    <br>
                </div>
            </div><br>
    
            <div class="form-group">
                <div class="menu-name">
                    <label for="menu_name">Menu Name : </label>
                    <input type="text" name="menu_name" class="form_control menu_n_des" id="menu_name" aria-describedby="emailHelp" value="" placeholder="Enter Menu Name">
                </div>
            </div><br>
    
            <div class="form-group">
                <div class="menu-des">
                    <label for="menu_des">Menu Description : </label>
                    <textarea name="menu_des" id="menu_des" cols="37" rows="9" placeholder="Enter Menu Description"></textarea>
                </div>
            </div><br>
    
            <div class="form-group">
              <div class="photo">
                <label for="photo">Photo : </label>
                <input type="file" name="photo" class="form_control" id="photo" value="" placeholder="photo">
              </div>
            </div><br>

            <div class="form-group">
                <div class="menu_price">
                    <label for="menu_name">Menu Price : </label>
                    <input type="number" name="menu_price" class="form_control menu_n_des" id="menu_price" placeholder="Enter Price">
                </div>
            </div><br>

            
            
            <div class="form_group_btn">
                <button type="submit" class="btn">Submit</button>
            </div>
          </form>
    </div>
</body>
</html>