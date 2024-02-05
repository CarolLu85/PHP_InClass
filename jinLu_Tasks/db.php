<?php 
    $servername = 'localhost';
    $username = 'jin23000';
    $password = "th0VWgIh";
    $database = "wp_jin23000";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
