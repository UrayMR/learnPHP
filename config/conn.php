<?php

$database = "learnPHP";
$hostName = "localhost";
$username = "root";
$password = null;

$conn = mysqli_connect($hostName, $username, $password, $database);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
};


