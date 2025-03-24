<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM MataKuliah WHERE id = $id";
$result = mysqli_query($conn, $query);
$matakuliah = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mata Kuliah</title>
</head>

<body>
  <nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="../fakultas/index.php">Fakultas</a>
    <a href="../prodi/index.php">Prodi</a>
    <a href="../mahasiswa/index.php">Mahasiswa</a>
    <a href="index.php">Mata Kuliah</a>
    <a href="../ruangankelas/index.php">Ruangan Kelas</a>
    <a href="../krs/index.php">KRS</a>
  </nav>
  
  <h2>Edit Mata Kuliah</h2>
  <form action="../../controller/MataKuliahController.php" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="text" name="name" value="<?= $matakuliah['name'] ?>" required>
    <input type="number" name="sks" value="<?= $matakuliah['sks'] ?>" required>
    <button type="submit">Simpan Perubahan</button>
  </form>
</body>

</html>