<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Database connected successfully";
?>
