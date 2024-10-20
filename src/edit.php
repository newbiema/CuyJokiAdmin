<?php include 'services/db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM karyawan WHERE id=$id");
$karyawan = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE karyawan SET nama='$nama', posisi='$posisi', gaji='$gaji', 
            tanggal_masuk='$tanggal_masuk', kontak='$kontak' WHERE id=$id";
    $conn->query($sql);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">Edit Karyawan</h1>
        <form method="POST" class="bg-white shadow-lg rounded-lg p-8">
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($karyawan['nama']); ?>" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="posisi" class="block text-sm font-medium text-gray-700">Posisi:</label>
                <input type="text" name="posisi" id="posisi" value="<?php echo htmlspecialchars($karyawan['posisi']); ?>" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="gaji" class="block text-sm font-medium text-gray-700">Gaji:</label>
                <input type="number" name="gaji" id="gaji" value="<?php echo htmlspecialchars($karyawan['gaji']); ?>" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?php echo htmlspecialchars($karyawan['tanggal_masuk']); ?>" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <div class="mb-6">
                <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak:</label>
                <input type="text" name="kontak" id="kontak" value="<?php echo htmlspecialchars($karyawan['kontak']); ?>" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 py-2 px-3" required>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 rounded-md hover:bg-yellow-600 transition duration-200">Update</button>
        </form>
    </div>
</body>
</html>
