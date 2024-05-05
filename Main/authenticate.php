<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement using a prepared statement
$sql = "SELECT * FROM `user` WHERE username=?";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("s", $username);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the user row
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session and redirect to main page
        $_SESSION['username'] = $username;
        header("Location: ../mini/index.html");
        exit;
    } else {
        // Invalid password
        $error = "Invalid username or password";
        include("login.php");
    }
} else {
    // User not found
    $error = "Invalid username or password";
    include("login.php");
}

$stmt->close();
$conn->close();
?>
