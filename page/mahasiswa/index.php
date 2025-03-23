<?php
// 5 Tabel
include "config/conn.php";

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Daftar mahasiswa</h2>
  <a href="create.php">Tambah mahasiswa</a>

  <table border=" 1">
    <tr>
      <th>NPM</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?= $row['npm'] ?></td>
        <td><?= $row['name'] ?></td>
        <td>
          <a href="edit.php?npm=<?= $row['npm'] ?>">Edit</a>
          <a href="../../controller/MahasiswaController.php?action=delete&npm=<?= $row['npm'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>