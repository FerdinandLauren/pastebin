<?php

/**
 * Trying to connect
 * HOST = 'localhost'
 * USER = 'root'
 * PASSWORD = ''
 * DATABASE = 'pastebin'
 * */
$conn = new mysqli('localhost', 'root', '', 'pastebin');

// Checking connection
if (!$conn) {
    // Connection Failed
    die(mysqli_error($conn));
}
