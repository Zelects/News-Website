<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			background-color: white;
			color: #fff;
			font-family: Arial, sans-serif;
		}

		.container {
			width: 400px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #252525;
		}

		h2 {
			text-align: center;
			margin-bottom: 30px;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 3px;
			border: none;
			background-color: #363636;
			color: #fff;
		}

		input[type="submit"] {
			padding: 10px;
			border: none;
			border-radius: 3px;
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
			font-weight: bold;
		}

		input[type="submit"]:hover {
			background-color: #0056b3;
		}

		.error-msg {
			color: red;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "test";

		$conn = mysqli_connect($host, $user, $password, $database);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$id = $_GET["id"];
		$sql = "SELECT * FROM users1 WHERE id=$id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		} else {
			echo '<p class="error-msg">User not found in the database.</p>';
			exit();
		}

		if (isset($_POST['submit'])) {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];

			$sql = "UPDATE users1 SET name='$name', email='$email', username='$username', password='$password' WHERE id=$id";
			if (mysqli_query($conn, $sql)) {
				echo '<p style="text-align: center; color: green;">Updated</p>';
			} else {
				echo '<p class="error-msg">Not Updated: ' . mysqli_error($conn) . '</p>';
			}
		}

		mysqli_close($conn);
	?>

	<div class="container">
		<h2>Update</h2>

		<form method="POST">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">

			<label for="email">Email:</label>
			<input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">

			<label for="username">Username:</label>
			<input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">

<label for="password">Password:</label>
<input type="password" id="password" name="password" value="<?php echo $row['password']; ?>">

<input type="submit" name="submit" value="Update">
</form>
</div>
</body>
</html>