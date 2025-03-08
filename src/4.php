
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
mysqli_select_db($conn, 'mydatabase') or die("Cannot connect to database");

// SQL query
$result = mysqli_query($conn, "SELECT * FROM mytable WHERE name='John'");

// Fetch data
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['age'];
}

// Close connection
mysqli_close($conn);
?>