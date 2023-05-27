<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <form action="save_product.php" method="POST" enctype="multipart/form-data">
            <div>
                <label>Product Name: </label>
                <input type="text" name="prod_name" class="box" required><br>
            </div>
        
            <div>
                <label>Price: </label>
                <input type="text" name="price" class="box" required><br>
            </div>
            
            <div>
                <label>Image: </label>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" required><br>
            </div>
    
            <input type="submit" value="submit" class="btn">
        </form>
    </div>
</body>


</html>