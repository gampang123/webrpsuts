<?php

$host = 'localhost';
$submit = 'root';
$password = '';
$database = 'web_rps';

$conn = mysqli_connect($host,$submit,$password,$database);

if(!$conn){
    die("Gagal terhubung ke databse " . mysqli_connect_error());
}