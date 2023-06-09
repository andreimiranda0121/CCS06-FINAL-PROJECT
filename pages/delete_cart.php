<?php

require "../config.php";

use App\Cart;

// Remove Student record, and automatically redirect to index
session_start();

try {
	$cart_id = $_GET['id'];
	$result = Cart::delByID($cart_id);

	if ($result) {
		header('Location: cart.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

?>

