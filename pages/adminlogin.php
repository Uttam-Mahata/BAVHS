<?php
require 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="validate.php" method="post">
		<div class="login-box">
		  
			<img src="icons.webp" width="200" height="200">
    
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="" required>
			</div>
<br />
			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true" style="color: black;"></i>
				<input type="password" placeholder="Password"
						name="password" value="" required>
			</div>
<br />
			<input class="btn btn-primary" type="submit"
					name="login" value="Log In" style="width: 150px; font-size: 20px; font-weight: bold;">	</div>
	</form>
</body>

</html>
