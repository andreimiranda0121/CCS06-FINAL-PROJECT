<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <style>
        .b25 {
            background: #252525;
        }

        .b1 {
            background: #1b1b1b;
        }

        .bg {
            position: fixed;
            top: -4rem;
            left: -12rem;
            z-index: -1;
            opacity: 0.7;
        }

        .bg2 {
            position: fixed;
            bottom: -2rem;
            right: -3rem;
            z-index: -1;
            width: 9.375rem;
            opacity: 0.7;
        }

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
            left: 20px;
            position: absolute;
            top: 20px;
        }

        .black-bar {
            background-color: #000;
            height: 70px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        h2 {
            margin-top: 20px;
            position: absolute;
            left: 45%;
            color: #fff;
            text-align: center;
            font-family: Helvetica, Arial, sans-serif;
        }
    </style>
    <title>Add Product</title>
</head>
<body>

    <div class="dashboard">
        <button class="button" onclick="history.back()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
        <div class="dashboard-title">
            <a>Mal De Wear</a>
        </div>
    </div>
    <h1>Add Product</h1>
    
    <div class="container">
        <form action="save_product.php" method="POST" enctype="multipart/form-data">
            <div>
                <label>Product Name:</label>
                <input type="text" name="prod_name" class="box" required><br>
            </div>

            <div>
                <label>Description:</label>
                <input type="text" name="description" class="box" required><br>
            </div>

            <div>
                <label>Price:</label>
                <input type="text" name="price" class="box" required><br>
            </div>

            <div>
                <label>Quantity:</label>
                <input type="text" name="quantity" class="box" required><br>
            </div>
            
            <div>
                <label>Gender:</label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            <br>
            <div>
                <label>Category: </label>
                <select name="category" required>
                    <option value="">Select Category</option>
                    <option value="Tops">Tops</option>
                    <option value="Bottoms">Bottoms</option>
                    <option value="Footwear">Footwear</option>
                    <option value="Accesory">Accesory</option>
                </select>
            </div>
            <br>
            <div>
                <label>Image:</label>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" required><br>
            </div>

            <input type="submit" value="Submit" class="btn">
        </form>
    </div>

    <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
    <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
</body>
</html>