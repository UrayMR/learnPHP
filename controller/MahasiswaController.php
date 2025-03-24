<?php
include '../config/conn.php';

$location = "../page/mahasiswa/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  // Validasi untuk memastikan npm unik
  $queryCheck = "SELECT * FROM Mahasiswa WHERE npm = '$npm'";
  $resultCheck = mysqli_query($conn, $queryCheck);
  if (mysqli_num_rows($resultCheck) == 0) {
    $query = "INSERT INTO Mahasiswa (npm, name, idProdi) VALUES ('$npm', '$name', '$idProdi')";
    mysqli_query($conn, $query);
  }

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM Mahasiswa WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['idProdi'];

  // Validasi untuk memastikan npm unik saat edit
  $queryCheck = "SELECT * FROM Mahasiswa WHERE npm = '$npm' AND id != '$id'";
  $resultCheck = mysqli_query($conn, $queryCheck);
  if (mysqli_num_rows($resultCheck) == 0) {
    $query = "UPDATE Mahasiswa SET npm = '$npm', name = '$name', idProdi = '$idProdi' WHERE id = '$id'";
    mysqli_query($conn, $query);
  }

  header("Location: <?= $location ?>index.php");
  exit();
}
