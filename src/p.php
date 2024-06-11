<?php
require 'controllers/connect.php';

$public_url = $_GET['public_url'];

$sql = "SELECT title, content FROM paste WHERE public_url='$public_url'";
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
    <title>Pastebin - Details<?php echo $title ?></title>
    <link rel="icon" href="assets/img/logop.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <header>
        <nav class="bg-white w-full flex justify-center items-center gap-x-96 z-20 shadow-xl">
            <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <h1 class="flex items-center font-bold text-2xl text-blue-950">
                <img src="assets/img/logopng.png" alt="Logo" class="w-16 h-16">Pastebin
            </h1>
                <ul class="flex gap-8 text-sm text-gray-600 uppercase mr-4">
                    <li class="cursor-pointer"><a href="index.php#create-paste">Back</a></li>
                </ul>
                <div class="flex sm:hidden">
                    <i class="text-2xl fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>

<main class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <div class="space-y-6">
        <h1 class="text-2xl font-bold text-center text-gray-800">Paste Details</h1>
        <div class="flex flex-col space-y-2">
            <label class="text-gray-700 font-semibold">Title:</label>
            <p class="border border-gray-300 rounded-md p-2"><?php echo htmlspecialchars($title); ?></p>
        </div>
        <div class="flex flex-col space-y-2">
            <label class="text-gray-700 font-semibold">Content:</label>
            <div class="border border-gray-300 rounded-md p-2"><?php echo nl2br(htmlspecialchars($content)); ?></div>
        </div>
        <div class="flex flex-col space-y-2">
            <label class="text-gray-700 font-semibold">Public URL:</label>
            <div class="flex items-center border border-gray-300 rounded-md p-2">
                <p id="publicUrl" class="flex-grow"><?php echo htmlspecialchars($public_url); ?></p>
                <button onclick="copyToClipboard()" class="ml-2 bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Copy</button>
            </div>
        </div>
        <!-- <div class="py-4">
            <a href="my_paste.php" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">My Paste</a>
        </div> -->
    </div>
</main>

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("publicUrl").innerText;
        var textarea = document.createElement("textarea");
        textarea.value = copyText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("Copied to clipboard: " + copyText);
    }
</script>


<script>
    function copyToClipboard() {
        var copyText = document.getElementById("publicUrl").innerText;
        navigator.clipboard.writeText(copyText).then(function() {
            alert("Copied to clipboard: " + copyText);
        }, function(err) {
            console.error("Could not copy text: ", err);
        });
    }
</script>
</body>

</html>