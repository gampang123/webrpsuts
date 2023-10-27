<?php
 include("config.php");

// Ambil data dari formulir
$pertemuan = $_POST['pertemuan'];
$materi = $_POST['materi'];
$deskripsi = $_POST['deskripsi'];


// Masukkan data ke database
$sql = "INSERT INTO matkuldb (pertemuan, materi, deskripsi) VALUES ('$pertemuan', '$materi', '$deskripsi')";

if ($conn->query($sql) === TRUE) {
    header("Location: preview.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>