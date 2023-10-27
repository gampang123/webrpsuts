<?php
$host = 'localhost';
$submit = 'root';
$password = '';
$database = 'web_rps';

$conn = mysqli_connect($host,$submit,$password,$database);

if(!$conn){
    die("Gagal terhubung ke databse " . mysqli_connect_error());
}

// Ambil data dari formulir
$matkul = $_POST['matkul'];
$des = $_POST['des'];


// Masukkan data ke database
$sql = "INSERT INTO beranda (matkul, des) VALUES ('$matkul', '$des')";

if ($conn->query($sql) === TRUE) {
    header("Location: beranda.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>