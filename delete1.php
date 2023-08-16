<style>
    body {
        background-image: url("background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        color: white;
    }

    a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: blue;
        color: white;
        border-radius: 5px;
        font-size: 16px;
    }
</style>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    if (isset($_GET["confirm"])) {
        $sql = "DELETE FROM users1 WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<h3>Are you sure you want to delete this record?</h3>";
        echo '<br><br>';
        echo '<a href="?id=' . $id . '&confirm=true">Yes, delete the id</a>';
        echo '<br><br>';
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>

<form action="tech.php" method="post">
    <input type="submit" value="Home" name="Home" style="font-size: 16px; padding: 10px 20px;" />
</form>