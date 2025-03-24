<?php
include '../config/conn.php';

$location = "../page/prodi/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $kodeProdi = $_POST['kodeProdi'];
  $namaProdi = $_POST['namaProdi'];
  $idFakultas = $_POST['idFakultas'];

  // Validasi untuk memastikan kodeProdi unik
  $queryCheck = "SELECT * FROM Prodi WHERE kodeProdi = '$kodeProdi'";
  $resultCheck = mysqli_query($conn, $queryCheck);
  if (mysqli_num_rows($resultCheck) == 0) {
    $query = "INSERT INTO Prodi (kodeProdi, namaProdi, idFakultas) VALUES ('$kodeProdi', '$namaProdi', '$idFakultas')";
    mysqli_query($conn, $query);
  }

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM Prodi WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $kodeProdi = $_POST['kodeProdi'];
  $namaProdi = $_POST['namaProdi'];
  $idFakultas = $_POST['idFakultas'];

  // Validasi untuk memastikan kodeProdi unik saat edit
  $queryCheck = "SELECT * FROM Prodi WHERE kodeProdi = '$kodeProdi' AND id != '$id'";
  $resultCheck = mysqli_query($conn, $queryCheck);
  if (mysqli_num_rows($resultCheck) == 0) {
    $query = "UPDATE Prodi SET kodeProdi = '$kodeProdi', namaProdi = '$namaProdi', idFakultas = '$idFakultas' WHERE id = '$id'";
    mysqli_query($conn, $query);
  }

  header("Location: <?= $location ?>index.php");
  exit();
}
