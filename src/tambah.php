<?php include 'services/db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengecek apakah form dikirim menggunakan metode POST.
    
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $kontak = $_POST['kontak'];
    // Mengambil data dari form yang dikirim, seperti nama, posisi, gaji, tanggal masuk, dan kontak.

    $sql = "INSERT INTO karyawan (nama, posisi, gaji, tanggal_masuk, kontak) 
            VALUES ('$nama', '$posisi', '$gaji', '$tanggal_masuk', '$kontak')";
    // Membuat query SQL untuk memasukkan data ke dalam tabel 'karyawan'. Data diambil dari variabel yang didapat dari form.

    $conn->query($sql);
    // Menjalankan query SQL untuk memasukkan data ke database.

    header('Location: index.php');
    // Mengarahkan kembali ke halaman index.php setelah data berhasil disimpan.
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/output.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">Tambah Karyawan</h1>
        <form method="POST" class="bg-white shadow-lg rounded-lg p-8">
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="posisi" class="block text-sm font-medium text-gray-700">Posisi:</label>
                <input type="text" name="posisi" id="posisi" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="gaji" class="block text-sm font-medium text-gray-700">Gaji:</label>
                <input type="number" name="gaji" id="gaji" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak:</label>
                <input type="text" name="kontak" id="kontak" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 rounded-md hover:bg-yellow-600 transition duration-200">Tambah</button>
        </form>
    </div>
</body>
</html>
