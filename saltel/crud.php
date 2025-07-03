<?php
$host = 'localhost';     // or 127.0.0.1
$user = 'root';          // your MySQL username
$pass = '';              // your MySQL password (empty if none)
$db   = 'crud_app';      // the database name

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) 
 {
    die('Connection failed: ' . $conn->connect_error);
}
?>
