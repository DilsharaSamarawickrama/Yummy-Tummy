<?php
    require_once("connection.php");

    
    
    $query="INSERT INTO `item` (item_name,item_price,item_image_folder,item_image_name,item_type) VALUES ('{$_POST['item_name']}',{$_POST['item_price']},'{$_POST['img_folder']}','{$_POST['img_name']}','{$_POST['itm_type']}')";
    
    if(isset($_POST['submit'])){
       mysqli_query($connection,$query); 
    }
   
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascript" src="../jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h1 class="h1 text-center">Item Form</h1>

        <form name="food_form" method="POST" target="">

            <div class="form-group">
                <label class="col-form-label"> Item Name </label>
                <input class="form-control" type="text" name="item_name">
            </div>
            <div class="form-group">
            <label class="col-form-label">Item Price</label> 
            <input class="form-control" type="text" name="item_price">
            </div>
            <div class="form-group">
            <label class="col-form-label">Image Folder</label>
             <input class="form-control" type="text" name="img_folder">
            </div>
            <div class="form-group"> 
            <label class="col-form-label">Image Name </label>
            <input class="form-control" type="text" name="img_name">
            </div>
            <div class="form-group">
            <label class="col-form-label">Item Type</label> <br>
            <input class="radio" type="radio" name="itm_type" value="food"> <label class="col-form-label">Food</label>
            <input class="radio" type="radio" name="itm_type" value="drink"> <label class="col-form-label">Drink</label>
            <input class="radio" type="radio" name="itm_type" value="dessert"> <label class="col-form-label">Dessert</label>
            </div>
            <input class="btn btn-info rounded" type="submit" name="submit" value="submit">
            <input class="btn btn-info rounded" type="reset" name="reset" value="reset">



        </form>

    </div>

</body>
</html>

<?php mysqli_close($connection);?>
