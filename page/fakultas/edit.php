<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM Fakultas WHERE id = $id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Fakultas</title>
</head>

<body>
  <nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="index.php">Fakultas</a>
    <a href="../prodi/index.php">Prodi</a>
    <a href="../mahasiswa/index.php">Mahasiswa</a>
    <a href="../matakuliah/index.php">Mata Kuliah</a>
    <a href="../ruangankelas/index.php">Ruangan Kelas</a>
    <a href="../krs/index.php">KRS</a>
  </nav>
  <h2>Edit Fakultas</h2>
  <form action="../../controller/FakultasController.php" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="text" name="name" value="<?= mysqli_fetch_assoc($result)['name'] ?>" required>
    <button type="submit">Simpan Perubahan</button>
  </form>
</body>

</html>