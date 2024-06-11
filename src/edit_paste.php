<?php
require 'controllers/connect.php';

$id = $_GET['id'];

$sql = "SELECT id, title, content, public_url FROM `paste` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$content = $row['content'];
$public_url = $row['public_url'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastebin - Edit Paste</title>
</head>

<body>
    <main>
        <form method="post" action="controllers/edit_paste_process.php">
            <fieldset>
                <legend>Edit Paste</legend>
                <p>
                    <input type="text" name="id" id="id" required hidden value="<?php echo $id; ?>">
                </p>
                <p>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Masukkan Title" required value="<?php echo $title; ?>">
                </p>
                <p>
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" placeholder="Masukkan Content" required cols="30" rows="10"><?php echo $content; ?></textarea>
                </p>
                <p>
                    <label for="public_url">Public URL:</label>
                    <input type="text" name="public_url" id="public_url" placeholder="Masukkan Public URL" value="<?php echo $public_url; ?>">
                </p>
            </fieldset>
            <button type="submit" name="submit">Update Data</button>
        </form>
    </main>
</body>

</html>