<?php

require '../config.php';

use App\User;

try{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role = 'user';

    $result = User::register($username,$password,$role);

    if($result){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' =>  $result,
            'username' => $username,
            'password' => $password
        ];
        header('Location: index.php');
    }
} catch (PDOException $e){
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}


?>