<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ben";


$conn = mysqli_connect($host, $username, $password, $database);


if ($conn) {
    echo "✅ Connection to database 'ben' successful!";
} else {
    die("❌ Connection failed: " . mysqli_connect_error());
}
?>



