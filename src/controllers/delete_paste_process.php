<?php
require 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `paste` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo 'Deleted Successfully';
        header('location:../my_paste.php');
    } else {
        die(mysqli_error($con));
    }
}
