<?php
include '../config/conn.php';

$location = "../page/prodi/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];
  $idFakultas = $_POST['fakultas_id'];

  $query = "INSERT INTO Prodi (name, idFakultas) VALUES ('$name', '$idFakultas')";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Prodi berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM Prodi WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Prodi berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $idFakultas = $_POST['fakultas_id'];

  $query = "UPDATE Prodi SET name = '$name', idFakultas = '$idFakultas' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Prodi berhasil diubah");
  exit();
}
