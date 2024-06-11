<?php
// Start session
session_start();

// Include database connection
include 'connect.php';
include 'helpers.php';

// Get form data
$id_user = $_POST['id_user'];
$title = $_POST['title'];
$content = $_POST['content'];
$public_url = $_POST['public_url'];

if ($public_url == "") {
    $public_url = generateRandomString();
}

// SQL to insert paste
if ($id_user != "")
    $sql = "INSERT INTO paste (id_user, title, content, public_url) VALUES ('$id_user', '$title', '$content', '$public_url')";
else
    $sql = "INSERT INTO paste (title, content, public_url) VALUES ('$title', '$content', '$public_url')";

if ($conn->query($sql) === TRUE) {
    header("location:../p.php?public_url=$public_url");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
