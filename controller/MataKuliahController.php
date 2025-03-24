<?php
include '../config/conn.php';

$location = "../page/matakuliah/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {

  $npm = $_POST['npm'];
  $name = $_POST['name'];

  $query = "INSERT INTO users (npm, name) VALUES ('$npm', '$name')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $npm = $_GET['npm'];

  $query = "DELETE FROM users WHERE npm = '$npm'";
  mysqli_query($conn, $query);


  header("Location:  <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {

  $np = $_POST['npm'];
  $name = $_POST['name'];

  $query = "UPDATE users SET name = '$name' WHERE npm = '$npm'";
  mysqli_query($conn, $query);

  header("Location:  <?= $location ?>index.php");
  exit();
}
