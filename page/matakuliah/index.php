<?php
include "../../config/conn.php";

$query = "SELECT * FROM MataKuliah";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mata Kuliah</title>
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
  <h2>Da ftar Mata Kuliah</h2>
  <?php if (isset($_GET['success'])): ?>
    <p><?= $_GET['success'] ?></p>
  <?php endif; ?>
  <a href="create.php">Tambah Mata Kuliah</a>
  <table>
    <tr>
      <th>ID</th>
      <th>Nama Mata Kuliah</th>
      <th>SKS</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['sks'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
          <a href="../../controller/MataKuliahController.php?action=delete&id=<?= $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>