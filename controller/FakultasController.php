<?php
include '../config/conn.php';

$location = "../page/fakultas/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {
  $name = $_POST['name'];

  $query = "INSERT INTO Fakultas (name) VALUES ('$name')";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Fakultas berhasil ditambahkan");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM Fakultas WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Fakultas berhasil dihapus");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {
  $id = $_POST['id'];
  $name = $_POST['name'];

  $query = "UPDATE Fakultas SET name = '$name' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location: " . $location . "index.php?success=Fakultas berhasil diubah");
  exit();
}
