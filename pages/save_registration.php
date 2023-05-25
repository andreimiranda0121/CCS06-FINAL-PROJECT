<?php

require '../config.php';

use App\User;

try{
    $username= $_POST['username'];
    $password= $_POST['password'];
} catch (PDOException $e){
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}


?>