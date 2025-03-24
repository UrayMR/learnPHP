<?php
include '../config/conn.php';

$location = "../page/mahasiswa/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['prodi_id'];

  $query = "INSERT INTO Mahasiswa (npm, name, idProdi) VALUES ('$npm', '$name', '$idProdi')";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mahasiswa berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $npm = $_GET['npm'];

  $query = "DELETE FROM Mahasiswa WHERE npm = '$npm'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mahasiswa berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $idProdi = $_POST['prodi_id'];

  $query = "UPDATE Mahasiswa SET name = '$name', idProdi = '$idProdi' WHERE npm = '$npm'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mahasiswa berhasil diubah");
  exit();
}
