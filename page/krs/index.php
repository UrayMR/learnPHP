<?php
include "../../config/conn.php";

$query = "SELECT KRS.id, Mahasiswa.name AS mahasiswa_name, MataKuliah.name AS matakuliah_name 
          FROM KRS 
          JOIN Mahasiswa ON KRS.npm = Mahasiswa.npm 
          JOIN MataKuliah ON KRS.idMataKuliah = MataKuliah.id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar KRS</title>
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
    <h2>Daftar KRS</h2>
    <?php if (isset($_GET['success'])): ?>
      <p><?= $_GET['success'] ?></p>
    <?php endif; ?>
    <a href="create.php">Tambah KRS</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Mahasiswa</th>
        <th>Mata Kuliah</th>
        <th>Aksi</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['mahasiswa_name'] ?></td>
          <td><?= $row['matakuliah_name'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="../../controller/KRSController.php?action=delete&id=<?= $row['id'] ?>">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </main>
</body>

</html>