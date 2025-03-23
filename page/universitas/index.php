<?php
// 5 Tabel
include "config/conn.php";

$query = "SELECT * FROM universitas";
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
  <h2>Daftar Universitas</h2>
  <a href="create.php">Tambah Universitas</a>

  <table border=" 1">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Provinsi</th>
      <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
          <a href="UniversitasController.php?action=delete&id=<?= $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>