<!DOCTYPE html>
<html>
<head>
	
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url(register.jpg);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			color: #fff;
			margin: 0;
			padding: 0;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		.container {
			width: 300px;
			margin: 50px auto;
			background-color: rgba(255, 255, 255, 0.7);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			background-image: url(register1.jpg.webp);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			color: #fff;
			
			
		}

		.container h2 {
			text-align: center;
			color: white;
			margin-bottom: 20px;
		}

		.container label {
			display: block;
			margin-bottom: 8px;
			font-weight: bold;
			color:white;
		}

		.container input[type="text"],
		.container input[type="email"],
		.container input[type="password"] {
			width: 80%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}

		.container input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}

		.container input[type="submit"]:hover {
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Register</h2>
		<form action="Register1.php" method="post">
		<label for="email">Name:</label>
			<input type="text" name="name" id="name" required><br>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required><br>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br>

			<input type="submit" name="submit" value="Register">
		</form>
		
	</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
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

	$sql = "CREATE TABLE IF NOT EXISTS users1 (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(50) NOT NULL
		)";
	if (mysqli_query($conn, $sql)) {
		echo "Table created successfully. ";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	$sql = "INSERT INTO users1 (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
	if (mysqli_query($conn, $sql)) {
		header("Location:login1.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

?>