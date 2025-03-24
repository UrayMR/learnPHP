<?php
include '../config/conn.php';

$location = "../page/mahasiswa/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $prodi_id = $_POST['prodi_id'];

  $query = "INSERT INTO Mahasiswa (npm, name, prodi_id) VALUES ('$npm', '$name', '$prodi_id')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Mahasiswa berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM Mahasiswa WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Mahasiswa berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $npm = $_POST['npm'];
  $name = $_POST['name'];
  $prodi_id = $_POST['prodi_id'];

  $query = "UPDATE Mahasiswa SET npm = '$npm', name = '$name', prodi_id = '$prodi_id' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Mahasiswa berhasil diubah");
  exit();
}
