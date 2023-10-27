<?php
// Include file konfigurasi database Anda (config.php)
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_to_delete'])) {
    // Ambil ID yang akan dihapus dari formulir
    $id_to_delete = $_POST['id_to_delete'];

    // Buat query DELETE
    $sql = "DELETE FROM matkuldb WHERE id = ?";

    // Persiapkan statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error: ' . $conn->error);
    }

    // Bind parameter
    $stmt->bind_param('i', $id_to_delete);

    // Jalankan pernyataan
    if ($stmt->execute()) {
        // Data telah dihapus
        header('location: preview.php');
    } else {
        // Terjadi kesalahan saat menghapus data
        echo "Error: " . $conn->error;
    }

    // Tutup pernyataan
    $stmt->close();
} else {
    // Jika tidak ada metode POST atau tidak ada ID yang diberikan, lakukan sesuatu yang sesuai
    echo "Aksi tidak valid.";
}

// Tutup koneksi database
$conn->close();
?>
