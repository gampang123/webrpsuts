<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['err'] = 'Silahkan login telebih dahulu!';
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="listrps.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
  <title>List RPS</title>
</head>
<style>
  .navbar {
    height: 10vh;
    background-color: #fdcd0b
}

.row {
    width: 100%;
    height: 90vh;
    padding-right: 5px;
}
    

.sidebar-menu {
    color: white;
}
 .nav-link:hover {
    background-color: grey;
 }

 .navbar-brand {
    font-weight: 700
 }
 
.card-body-icon {
    position: absolute;
    z-index: 0;
    top: 300px;
    right: 30px;
    opacity: 0.4;
    font-size: 200px;
}

a {
    color: black ;
}

.see-detail {
    position: absolute;
    z-index: 0;
    top: 550px;
}

.btn {
  background-color: black;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: yellow;
}
</style>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="beranda.php">
    <img src="logoamikompanjang.png" width="250px">
</a>
    <div class="icon ml-auto">
      <h5>
        <a class="d-flex justify-content-center text-dark" href="../login/login.php">
          <i class="fa-solid fa-arrow-right-from-bracket mt-3 mr-3" data-toggle="tooltip" title="Logout"> </i>
        </a>
      </h5>
    </div>
  </nav>
  <!-- NAVBAR SELESAI -->

  <!-- SIDEBAR -->
  <div class="row no-gutters">
    <div class="col-md-2 pr-4 pt-4 bg-dark">
      <ul class="nav flex-column ml-3 mt-3">
        <li class="nav-item text-center">
          <img style="width: 50%; border-radius: 20px;" src="2.jpg">
        </li>
        <li class="nav-item text-center mt-3">
          <a class="nav-link active text-white">
          <?= $_SESSION['username'] ?>
          <a>
        </li>
        <li class="nav-item text-center mt-3">
          <a class="nav-link active text-white">
          <?= $_SESSION['nim'] ?>
          <a>
        </li>
        <br>
        <li class="sidebar-menu"><b>MENU UTAMA</b>
        <li class="nav-item">
          <a class="nav-link text-white" href="preview.php"><i></i>List RPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="create_anyar.php"><i></i>Tambah RPS</a>
        </li>
        </li>
      </ul>
    </div>

    <!-- SIDEBAR SELESAI -->

    <!-- CONTAINER -->
    <div class="col-md-10 p-5 pt-2">
    <div class="container mt-3">
        <h2 class="text-start">Tambah Materi</h2>
        <form action="controller_rps.php" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">Pertemuan</label>
                <input type="text" class="form-control" placeholder="masukkan pertemuan" name="pertemuan">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">materi</label>
                <input type="text" class="form-control" placeholder="masukkan materi" name="materi">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" placeholder="masukkan deskripsi" name="deskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a class="btn btn-secondary" href="beranda.php">Dasboard</a>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="listrps.js"></script>
</body>

</html>