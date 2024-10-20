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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/output.css">
    <style>
        /* Global Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 2rem;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 2rem;
        }

        /* Form Styling */
        form {
            background-color: white;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 1rem;
            font-weight: 500;
            color: #6b7280;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #fbbf24; /* Yellow Focus Color */
            box-shadow: 0 0 0 4px rgba(251, 191, 36, 0.2);
        }

        /* Submit Button */
        .btn-update {
            background: linear-gradient(135deg, #F59E0B 0%, #FBBF24 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }

        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1>Edit Karyawan</h1>
        <form method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $karyawan['nama']; ?>" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" name="posisi" id="posisi" value="<?php echo $karyawan['posisi']; ?>" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="form-group">
                <label for="gaji">Gaji:</label>
                <input type="number" name="gaji" id="gaji" value="<?php echo $karyawan['gaji']; ?>" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?php echo $karyawan['tanggal_masuk']; ?>" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="text" name="kontak" id="kontak" value="<?php echo $karyawan['kontak']; ?>" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <button type="submit" class="btn-update">Update</button>
        </form>
    </div>
</body>
</html>
