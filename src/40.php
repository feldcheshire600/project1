<?php 
// Initialize the database connection
$db = new mysqli("localhost", "root", "", "project1");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
