<?php

include("config.php");

if($_POST['action'] == 'login'){
    global $conn;
    $email = $_POST['email'];
    $password =md5($_POST['password']);

    $query = "SELECT * FROM submit WHERE email = '$email'";
    $mysql_query = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($mysql_query);

    if($row){
        
        // Verifikasi password 
        if($row['password'] == $password){
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['nim'] = $row['nim'];
            $_SESSION['email'] = $row['email'];
            header("Location: beranda.php");
        } else{
            session_start();
            $_SESSION['err'] = "Email atau password salah!";
            header("Location: login.php");
        }

    } else{
        session_start();
        $_SESSION['err'] = "Email atau password salah!";
        header("Location: login.php");
    }
}
