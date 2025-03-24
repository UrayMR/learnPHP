<?php
include '../config/conn.php';

$location = "../page/krs/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $npm = $_POST['npm'];
  $idMataKuliah = $_POST['idMataKuliah'];

  $query = "INSERT INTO KRS (npm, idMataKuliah) VALUES ('$npm', '$idMataKuliah')";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=KRS berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM KRS WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=KRS berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $npm = $_POST['npm'];
  $idMataKuliah = $_POST['idMataKuliah'];

  $query = "UPDATE KRS SET npm = '$ npm', idMataKuliah = '$idMataKuliah' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=KRS berhasil diubah");
  exit();
}
