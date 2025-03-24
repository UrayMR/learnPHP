<?php
include "../../config/conn.php";

$query = "SELECT Mahasiswa.npm, Mahasiswa.name, Prodi.name AS prodi_name 
          FROM Mahasiswa 
          LEFT JOIN Prodi ON Mahasiswa.idProdi = Prodi.id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
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
    <h2>Daftar Mahasiswa</h2>
    <?php if (isset($_GET['success'])): ?>
      <p><?= $_GET['success'] ?></p>
    <?php endif; ?>
    <a href="create.php">Tambah Mahasiswa</a>
    <table>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['npm'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['prodi_name'] ?></td>
          <td>
            <a href="edit.php?npm=<?= $row['npm'] ?>">Edit</a>
            <a href="../../controller/MahasiswaController.php?action=delete&npm=<?= $row['npm'] ?>">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </main>
</body>

</html>