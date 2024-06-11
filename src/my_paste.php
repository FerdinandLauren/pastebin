<?php
require 'controllers/connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastebin - My Paste</title>
</head>

<body>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Public URL</th>
                <th>Operations</th>
            </tr>
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

                        echo '<tr>';
                        echo "<th scope=\"row\">$id</th>";
                        echo "<td>$title</td>";
                        echo "<td>$content</td>";
                        echo "<td>$public_url</td>";

                        echo '<td>
                            <button><a href="edit_paste.php?id=' . $id . '">Edit</a></button>
                            <button><a href="controllers/delete_paste_process.php?id=' . $id . '" onclick="return confirm(\'Apakah kamu yakin ingin menghapus paste ini?\');">Delete</a></button>
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