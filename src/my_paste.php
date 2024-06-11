<?php
require 'controllers/connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="assets/img/logop.jpg">
    <title>Pastebin - My Paste</title>
</head>

<body class="font-Poppins bg-gray-100">
    <!-- Navbar -->
    <header>
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-2 flex justify-between items-center">
                <h1 class="text-xl font-bold text-blue-950 flex items-center gap-2">
                    <img src="assets/img/logopng.png" alt="Logo" class="w-10 h-10">Pastebin
                </h1>
                <ul class="flex gap-8 text-sm text-gray-600 uppercase">
                    <li class="cursor-pointer"><a href="#feature">Features</a></li>
                    <li class="cursor-pointer"><a href="#user">Users</a></li>
                    <li class="cursor-pointer"><a href="#contact">Contact</a></li>
                    <?php if (isset($_SESSION['id_user'])) : ?>
                        <li class="cursor-pointer"><a href="my_paste.php">My Paste</a></li>
                    <?php else : ?>
                        <li>
                            <a href="login.php" class="px-3 py-1 bg-red-500 text-white rounded-md">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="flex sm:hidden">
                    <i class="text-2xl fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">My Paste</h2>
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-200 px-4 py-2 text-center">ID</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Title</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Content</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Public URL</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, title, content, public_url FROM `paste` WHERE id_user='" . $_SESSION['id_user'] . "'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $public_url = $row['public_url'];

                        echo '<tr class="border border-gray-200">';
echo "<td class='px-4 py-2 text-center'>$id</td>";
echo "<td class='px-4 py-2 text-center'>$title</td>";
echo "<td class='px-4 py-2 text-center'>$content</td>";
echo "<td class='px-4 py-2 text-center'>$public_url</td>";


                        echo '<td class="px-4 py-2 text-center">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="edit_paste.php?id=' . $id . '">Edit</a>
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="return confirm(\'Apakah kamu yakin ingin menghapus paste ini?\');">
                                    <a href="controllers/delete_paste_process.php?id=' . $id . '">Delete</a>
                                </button>
                            </td>' .
                            '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
