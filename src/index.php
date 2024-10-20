<?php include 'services/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/output.css">
    <style>
        /* Global styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #333;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Heading */
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 2rem;
        }

        /* Button */
        .btn {
            background: linear-gradient(135deg, #6C63FF 0%, #3B82F6 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        /* Table */
        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            border-radius: 0.75rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        thead {
            background-color: #3B82F6;
            color: white;
        }

        th, td {
            padding: 1rem;
            text-align: left;
        }

        th {
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: background-color 0.3s ease;
        }

        tbody tr:hover {
            background-color: #f9fafb;
            cursor: pointer;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        /* Action Buttons */
        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .edit-btn {
            background-color: #f59e0b;
            color: white;
        }

        .edit-btn:hover {
            background-color: #d97706;
        }

        .delete-btn {
            background-color: #ef4444;
            color: white;
        }

        .delete-btn:hover {
            background-color: #dc2626;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Karyawan CuyJoki</h1>

        <!-- Tambah Karyawan Button -->
        <div class="flex justify-end mb-10">
            <a href="tambah.php" class="btn">Tambah Karyawan</a>
        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-lg">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Gaji</th>
                        <th>Tanggal Masuk</th>
                        <th>Kontak</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query("SELECT * FROM karyawan");
                while ($row = $result->fetch_assoc()):
                ?>
                    <tr>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['posisi']; ?></td>
                        <td><?php echo $row['gaji']; ?></td>
                        <td><?php echo $row['tanggal_masuk']; ?></td>
                        <td><?php echo $row['kontak']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn ml-2">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
