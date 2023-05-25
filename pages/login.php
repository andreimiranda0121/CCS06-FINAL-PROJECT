<?php

require "../config.php";

// If the session variable is already set, automatically redirect the user to index page


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<h1>Login</h1>

<form action="attempt_login.php" method="POST">
	<div>
		<label>Username</label>
		<input type="text" name="username"/>	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" />	
	</div>
	<div>
		<button>
			Login
		</button>	
	</div>
</form>
<form action="register.php" method="POST">
	<div>
		<button>
			Register
		</button>
	</div>	
	</body>
</html>