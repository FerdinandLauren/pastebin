<?php
// Start session
session_start();

// Include database connection
include 'connect.php';

// Get form data
$id_user = $_POST['id_user'];
$title = $_POST['title'];
$content = $_POST['content'];

// SQL to insert paste
if ($id_user != "")
    $sql = "INSERT INTO paste (id_user, title, content) VALUES ('$id_user', '$title', '$content')";
else
    $sql = "INSERT INTO paste (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    header('location:../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
