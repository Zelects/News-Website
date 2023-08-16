<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$host="localhost";
	$user="root";
	$password="";
	$database="test";

	$conn=  mysqli_connect($host, $user, $password, $database);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM users1 WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		header("Location: tech.php");
		
	} else {
        header("Location: Register1.php");
	}

	mysqli_close($conn);
}
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url('register.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		.container {
			width: 300px;
			background-image:url(register1.jpg.webp);
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			color: #fff;
		}

		.container h2 {
			text-align: center;
		}

		.container input[type="text"],
		.container input[type="password"] {
			width: 80%;
			padding: 8px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.container input[type="submit"] {
			width: 86%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.container input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login</h2>
		<form action="" method="post">
			Username:
			<input type="text" name="username" required><br>
			Password:
			<input type="password" name="password" required><br>

			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>
