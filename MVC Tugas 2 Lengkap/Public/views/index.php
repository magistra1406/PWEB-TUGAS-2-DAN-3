<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <div class="table-wrapper">
        <main class="table">
            <section class="table__header">
                <h1>Mahasiswa Teknologi Informasi</h1>
                <a class="button-36" href="?action=create">Create +</a>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($users as $user):
                        ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?= $user["nama"] ?></td>
                            <td><?= $user["nim"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td><?= $user["alamat"] ?></td>
                            <td>
                                <a class="button-36" href="?action=show&id=<?= $user['id']; ?>">Show</a>
                                <a class="button-36" href="?action=edit&id=<?= $user['id']; ?>">Edit</a>
                                <a class="button-36" href="?action=delete&id=<?= $user['id']; ?>" onclick="return checkDelete()">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script>
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
</body>
</html>
