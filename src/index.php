<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link href="tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Data Karyawan</h1>
        <div class="flex justify-end mb-4">
            <a href="tambah.php" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Karyawan</a>
        </div>
        <table class="min-w-full bg-white shadow-lg">
            <thead>
                <tr>
                    <th class="px-6 py-4 text-left">Nama</th>
                    <th class="px-6 py-4 text-left">Posisi</th>
                    <th class="px-6 py-4 text-left">Gaji</th>
                    <th class="px-6 py-4 text-left">Tanggal Masuk</th>
                    <th class="px-6 py-4 text-left">Kontak</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result = $conn->query("SELECT * FROM karyawan");
            while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td class="border px-6 py-4"><?php echo $row['nama']; ?></td>
                    <td class="border px-6 py-4"><?php echo $row['posisi']; ?></td>
                    <td class="border px-6 py-4"><?php echo $row['gaji']; ?></td>
                    <td class="border px-6 py-4"><?php echo $row['tanggal_masuk']; ?></td>
                    <td class="border px-6 py-4"><?php echo $row['kontak']; ?></td>
                    <td class="border px-6 py-4 text-center">
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="bg-yellow-400 text-white px-4 py-2 rounded">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
