<?php
include '../config/conn.php';

$location = "../page/krs/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $mahasiswa_id = $_POST['mahasiswa_id'];
  $matakuliah_id = $_POST['matakuliah_id'];

  $query = "INSERT INTO KRS (mahasiswa_id, matakuliah_id) VALUES ('$mahasiswa_id', '$matakuliah_id')";
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
  $mahasiswa_id = $_POST['mahasiswa_id'];
  $matakuliah_id = $_POST['matakuliah_id'];

  $query = "UPDATE KRS SET mahasiswa_id = '$ mahasiswa_id', matakuliah_id = '$matakuliah_id' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=KRS berhasil diubah");
  exit();
}
