<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO karyawan (nama, posisi, gaji, tanggal_masuk, kontak) 
            VALUES ('$nama', '$posisi', '$gaji', '$tanggal_masuk', '$kontak')";
    $conn->query($sql);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link href="tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Tambah Karyawan</h1>
        <form method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold">Nama:</label>
                <input type="text" name="nama" id="nama" class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="posisi" class="block text-sm font-semibold">Posisi:</label>
                <input type="text" name="posisi" id="posisi" class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="gaji" class="block text-sm font-semibold">Gaji:</label>
                <input type="number" name="gaji" id="gaji" class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="tanggal_masuk" class="block text-sm font-semibold">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="kontak" class="block text-sm font-semibold">Kontak:</label>
                <input type="text" name="kontak" id="kontak" class="border rounded w-full py-2 px-3">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
        </form>
    </div>
</body>
</html>
