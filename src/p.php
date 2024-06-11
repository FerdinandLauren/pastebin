<?php
require 'controllers/connect.php';

$public_url = $_GET['public_url'];

$sql = "SELECT title, content FROM `paste` WHERE public_url='$public_url'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$content = $row['content'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastebin - <?php echo $title ?></title>
</head>

<body>
    <main>
        <h2><?php echo $title ?></h2>
        <?php echo $content ?>
    </main>
</body>

</html>