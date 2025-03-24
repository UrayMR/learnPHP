<?php
include '../config/conn.php';

$location = "../page/ruangankelas/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];
  $capacity = $_POST['capacity'];

  $query = "INSERT INTO RuanganKelas (name, capacity) VALUES ('$name', '$capacity')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Ruangan Kelas berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM RuanganKelas WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Ruangan Kelas berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $capacity = $_POST['capacity'];

  $query = "UPDATE RuanganKelas SET name = '$name', capacity = '$capacity' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php?success=Ruangan Kelas berhasil diubah");
  exit();
}
