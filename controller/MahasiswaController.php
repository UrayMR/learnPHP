<?php
include '../config/conn.php';

$location = "../page/mahasiswa/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {

  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  $query = "INSERT INTO mahasiswa (npm, name, idProdi) VALUES ('$npm', '$name', '$idProdi')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $npm = $_GET['npm'];

  $query = "DELETE FROM mahasiswa WHERE npm = '$npm'";
  mysqli_query($conn, $query);


  header("Location:  <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {

  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  $query = "UPDATE mahasiswa SET name = '$name' WHERE npm = '$npm'";
  mysqli_query($conn, $query);

  header("Location:  <?= $location ?>index.php");
  exit();
}
