<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save_registration.php" method="POST">
        <div>
            <label>Username: </label>
            <input type="text" name="username" placeholder="Enter your username" required><br>
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Enter yor email" required>
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div>
            <input type="submit" class="submit" value="Signup">
        </div>
    </form>
</body>
</html>