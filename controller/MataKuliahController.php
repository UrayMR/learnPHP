<?php
include '../config/conn.php';

$location = "../page/matakuliah/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];
  $sks = $_POST['sks'];
  $prodi_id = $_POST['prodi_id'];

  $query = "INSERT INTO MataKuliah (name, sks, idProdi) VALUES ('$name', '$sks', $prodi_id)";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mata Kuliah berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM MataKuliah WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mata Kuliah berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $sks = $_POST['sks'];
  $prodi_id = $_POST['prodi_id'];

  $query = "UPDATE MataKuliah SET name = '$name', sks = '$sks', idProdi = $prodi_id WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Mata Kuliah berhasil diubah");
  exit();
}
