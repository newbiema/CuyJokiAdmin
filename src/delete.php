<?php
include 'services/db.php';
// Menghubungkan ke file database untuk koneksi ke database.

$id = $_GET['id'];
// Mengambil nilai 'id' dari parameter URL untuk mengetahui karyawan mana yang akan dihapus.

$conn->query("DELETE FROM karyawan WHERE id=$id");
// Menjalankan query SQL untuk menghapus karyawan dari database berdasarkan 'id' yang didapat dari URL.

header('Location: index.php');
// Setelah karyawan berhasil dihapus, pengguna akan diarahkan kembali ke halaman utama (index.php).
?>
