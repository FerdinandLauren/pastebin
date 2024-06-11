<?php
require 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $public_url = $_POST['public_url'];

    $sql = "UPDATE `paste` SET id='$id', title='$title', content='$content', public_url='$public_url' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:../my_paste.php');
    } else {
        echo 'Data inserted failed';
        die(mysqli_error($conn));
    }
}
