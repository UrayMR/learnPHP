<?php
include '../config/conn.php';

$location = "../page/matakuliah/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  // Validasi untuk memastikan idProdi ada
  $queryCheck = "SELECT * FROM Prodi WHERE id = '$idProdi'";
  $resultCheck = mysqli_query($conn, $queryCheck);
  if (mysqli_num_rows($resultCheck) > 0) {
    $query = "INSERT INTO MataKuliah (name, idProdi) VALUES ('$name', '$idProdi')";
    mysqli_query($conn, $query);
  }

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM MataKuliah WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  $query = "UPDATE MataKuliah SET name = '$name', idProdi = '$idProdi' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}
