<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url(settings.jpg);
            background-repeat:no-repeat;
            background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 10px;
        text-align: center;
        height:100vh;
		}

		table {
			width: 70%;
			border-collapse: collapse;
			margin: 20px auto;
            background-color:white;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
            color:black;
		}

		th {
			background-color: lightblue;
			color: white;
		}

		a {
			display: inline-block;
			padding: 6px 12px;
			background-color: blue;
			color: white;
			text-decoration: none;
			border-radius: 4px;
		}

		a:hover {
			background-color: darkblue;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
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

		$sql = "SELECT * FROM users1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<h1>Settings</h1>";
			echo "<table>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Username</th>
						<th>Password</th>
						<th>Update</th>
						<th>Delete</th>
						<th>Home</th>
					</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>
						<td>" . $row["name"] . "</td>
						<td>" . $row["email"] . "</td>
						<td>" . $row["username"] . "</td>
						<td>" . $row["password"] . "</td>
						<td><a href='update1.php?id=" . $row["id"] . "'>Update</a></td>
						<td><a href='delete1.php?id=" . $row["id"] . "'>Delete</a></td>
						<td><a href='tech.php'>Home</a></td>
					</tr>";
			}
			echo "</table>";
		}

		mysqli_close($conn);
	?>
</body>
</html>