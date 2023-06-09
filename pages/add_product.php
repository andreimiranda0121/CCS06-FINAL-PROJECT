<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>
    <title>Add Product</title>
</head>
<body>
    <button class="button" onclick="history.back()">Back</button>
    <div class="container">
        <form action="save_product.php" method="POST" enctype="multipart/form-data">
            <div>
                <label>Product Name: </label>
                <input type="text" name="prod_name" class="box" required><br>
            </div>
        
            <div>
                <label>Description:</label>
                <input type="text" name="description" class="box" required><br>
            </div>

            <div>
                <label>Price: </label>
                <input type="text" name="price" class="box" required><br>
            </div>
            
            <div>
                <label>Quantity:</label>
                <input type="text" name="quantity" class="box" required><br>
            </div>

            <div>
                <label>Size:</label>
                <input type="text" name="size" class="box" required><br>
            </div>

            <div>
                <label>Gender: </label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            
            <div>
                <label>Color:</label>
                <input type="text" name="color" class="box" required><br>
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
