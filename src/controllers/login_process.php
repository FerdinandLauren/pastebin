<?php
// Start session
session_start();

// Include database connection
include 'connect.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// SQL to get user
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Password is correct, set session variables
        $_SESSION['id_user'] = $row['id'];
        header('location:../index.php');
    } else {
        // Password is incorrect
        header('location:../login.php');
    }
} else {
    // User not found
    echo "User not found!";
}

$conn->close();
