<?php 
$host = 'localhost';
$submit = 'root';
$password = '';
$database = 'web_rps';

$conn = mysqli_connect($host,$submit,$password,$database);
include('config.php');

session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['err'] = 'Silahkan login telebih dahulu!';
    header("location: login.php");
}

$id = $_GET['edit'];

$sql = "SELECT * FROM beranda WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if(!$conn){
    die("Gagal terhubung ke databse " . mysqli_connect_error());
}

// Ambil data dari formulir


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-start">Edit mata kuliah/deskripsi</h2>
        <form action="update_data.php" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" name="matkul" placeholder="<?= $row['matkul']?>" value="<?= $row['matkul']?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="matkul" placeholder="<?= $row['des']?>" value="<?= $row['des'] ?>">
            </div>
            <button  type="submit" class="btn btn-primary">Tambah</button>
            <a class="btn btn-secondary" href="beranda.php">Dasboard</a>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>