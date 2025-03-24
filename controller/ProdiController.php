<?php
include '../config/conn.php';

$location = "../page/prodi/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "create") {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $idFakultas = $_POST['idFakultas'];

  $query = "INSERT INTO prodi (id, name, idFakultas) VALUES ('$id', '$name', '$idFakultas')";
  mysqli_query($conn, $query);

  header("Location: <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "delete") {
  $id = $_GET['id'];

  $query = "DELETE FROM prodi WHERE id = '$id'";
  mysqli_query($conn, $query);


  header("Location:  <?= $location ?>index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "edit") {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $idFakultas = $_POST['idFakultas'];

  $query = "UPDATE prodi SET name = '$name' idFakultas = '$idFakultas' WHERE id = '$id'";
  mysqli_query($conn, $query);

  header("Location:  <?= $location ?>index.php");
  exit();
}
