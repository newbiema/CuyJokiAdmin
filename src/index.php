<?php include 'services/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan Cuy Joki</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">Data Karyawan CuyJoki</h1>
        <div class="flex justify-end mb-4">
            <a href="tambah.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200">Tambah Karyawan</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-blue-600 text-white uppercase text-sm">
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
                while ($row = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="border-b px-6 py-4"><?php echo $row['nama']; ?></td>
                        <td class="border-b px-6 py-4"><?php echo $row['posisi']; ?></td>
                        <td class="border-b px-6 py-4"><?php echo number_format($row['gaji'], 0, ',', '.'); ?></td>
                        <td class="border-b px-6 py-4"><?php echo $row['tanggal_masuk']; ?></td>
                        <td class="border-b px-6 py-4"><?php echo $row['kontak']; ?></td>
                        <td class="border-b px-6 py-4 text-center">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition duration-200">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 ml-2">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
