<?php
include '../config/conn.php';

$location = "../page/ruangankelas/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];
  $capacity = $_POST['capacity'];
  $fakultas_id = $_POST['fakultas_id'];

  $query = "INSERT INTO RuanganKelas (name, capacity, idFakultas) VALUES ('$name', '$capacity', '$fakultas_id')";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Ruangan Kelas berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM RuanganKelas WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Ruangan Kelas berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $capacity = $_POST['capacity'];
  $fakultas_id = $_POST['fakultas_id'];

  $query = "UPDATE RuanganKelas SET name = '$name', capacity = '$capacity', idFakultas = $fakultas_id WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Ruangan Kelas berhasil diubah");
  exit();
}
