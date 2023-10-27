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
        <h2 class="text-start">Edit Beranda</h2>
        <form action="controller_beranda.php" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" placeholder="Masukkan mata kuliah" name="matkul">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" placeholder="Masukkan deskripsi" name="des">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a class="btn btn-secondary" href="dasbord.php">Dasboard</a>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>