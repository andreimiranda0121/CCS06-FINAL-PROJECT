<?php

require '../config.php';
require '../src/User.php';
use App\User;
session_start();
try{

    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = User::attemptLogin($username,$password);

    if(!$result){
        echo "
            <script>
                alert('Login failed. Username or password is incorrect.');
                window.history.back();
            </script>";
    }
    
    if (!is_null($result) ) {

		// Set the logged in session variable and redirect user to index page
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' => $result->getID(),
            'username'=> $result->getUsername(),
            'password'=> $result->getPassword(),
            'roles  '=> $result->getRole()
        ];

        if($result->getRole() === 'admin'){
            header("Location: admin_panel.php");
        }else{
            header("Location: productpage.php");
        }
		
	}

}catch(PDOException $e){
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
} catch (Exception $e) {
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

?>