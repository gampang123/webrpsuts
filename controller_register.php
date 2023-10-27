<?php

include("config.php");

$username = $_POST['username'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$password =md5($_POST['password']);

$sql = "INSERT INTO submit (username, nim, email, password) VALUES ('$username', '$nim','$email', '$password')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header("Location: login.php");
        exit;
    } else {
        echo "gagal";
        exit;
    }
