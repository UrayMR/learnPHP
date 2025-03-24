<?php
include '../config/conn.php';

$location = "../page/fakultas/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {

  $id = $_POST['id'];
  $name = $_POST['name'];

  $query = "INSERT INTO fakultas (id, name) VALUES ('$id', '$name')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM fakultas WHERE id = '$id'";
  mysqli_query($conn, $query);


  header("Location:  <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {

  $id = $_POST['id'];
  $name = $_POST['name'];

  $query = "UPDATE fakultas SET name = '$name' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location:  <?= $location ?>index.php");
  exit();
}
