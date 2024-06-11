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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <main class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <form method="post" action="controllers/edit_paste_process.php" class="space-y-6">
            <h1 class="text-2xl font-bold text-center text-gray-800">Edit Paste</h1>
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <div class="flex flex-col space-y-2">
                <label for="title" class="text-gray-700 font-semibold">Title:</label>
                <input type="text" name="title" id="title" placeholder="Enter Title" required value="<?php echo $title; ?>" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex flex-col space-y-2">
                <label for="content" class="text-gray-700 font-semibold">Content:</label>
                <textarea name="content" id="content" placeholder="Enter Content" required rows="6" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"><?php echo $content; ?></textarea>
            </div>
            <div class="flex flex-col space-y-2">
                <label for="public_url" class="text-gray-700 font-semibold">Public URL:</label>
                <input type="text" name="public_url" id="public_url" placeholder="Enter Public URL" value="<?php echo $public_url; ?>" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <button type="submit" name="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Update Data</button>
            </div>
        </form>
    </main>
</body>

</html>
