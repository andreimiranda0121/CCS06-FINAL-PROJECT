<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form action="save_product.php" method="POST">
        <div>
            <label>Product Name: </label>
            <input type="text" name="prod_name"><br>
        </div>
    
        <div>
            <label>Price: </label>
            <input type="text" name="price"><br>
        </div>
        
        <div>
            <label>Image: </label>
            <input type="text" name="image"><br>
        </div>

        <input type="submit" value="submit">
    </form>
</body>
</html>