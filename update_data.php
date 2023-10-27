<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $matkul = $_POST['matkul'];
    $des = $_POST['des'];

    $sql = "UPDATE beranda SET matkul = ?, des = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error: ' . $conn->error);
    }

    $stmt->bind_param('ssi', $materi, $des, $id);

    if ($stmt->execute()) {
        // Data berhasil diperbarui
        header("Location: beranda.php"); // Alihkan kembali ke halaman beranda
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Permintaan tidak valid.";
}

// Tutup koneksi database
$conn->close();
?>
