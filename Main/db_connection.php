<?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this if you have a different MySQL username
$password = ""; // Change this if you have set a password for your MySQL user
$dbname = "moviedb"; // Change this to the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
