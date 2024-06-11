<?php
// Include database connection
include 'connect.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL to insert user
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    header('location:../login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
