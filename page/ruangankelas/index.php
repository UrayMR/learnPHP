<?php
include "../../config/conn.php";

$query = "SELECT * FROM RuanganKelas";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Ruangan Kelas</title>
  <link rel="stylesheet" href="../../style.css">
</head>

<body>
  <header>
    <nav>
      <a href="../../dashboard.php">Home</a>
      <a href="../fakultas/index.php">Fakultas</a>
      <a href="../prodi/index.php">Prodi</a>
      <a href="../mahasiswa/index.php">Mahasiswa</a>
      <a href="../matakuliah/index.php">Mata Kuliah</a>
      <a href="../ruangankelas/index.php">Ruangan Kelas</a>
      <a href="../krs/index.php">KRS</a>
    </nav>
  </header>

  <main>
    <h2>Daftar Ruangan Kelas</h2>
    <?php if (isset($_GET['success'])): ?>
      <p><?= $_GET['success'] ?></p>
    <?php endif; ?>
    <a href="create.php">Tambah Ruangan Kelas</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Nama Ruangan</th>
        <th>Kapasitas</th>
        <th>Aksi</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['capacity'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="../../controller/RuanganKelasController.php?action=delete&id=<?= $row['id'] ?>">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </main>

</body>

</html>