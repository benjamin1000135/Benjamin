<?php
 // DB config
 $host = "localhost";
 $user = "root";
 $password = "";
 $dbname = "school_db";
 
 // Connect to DB
 $conn = new mysqli($host, $user, $password, $dbname);
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
 // Handle form submission
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $name = trim($_POST['name']);
   $school = trim($_POST['school']);
   $amount = floatval($_POST['amount']);
 
   if ($name && $school && $amount > 0) {
     $stmt = $conn->prepare("INSERT INTO students (name, school, amount) VALUES (?, ?, ?)");
     $stmt->bind_param("ssd", $name, $school, $amount);
     $stmt->execute();
     $stmt->close();
   }
 }
 
 // Fetch students
 $students = $conn->query("SELECT * FROM students ORDER BY created_at DESC LIMIT 10");
 
?>