<?php
include "../../config/conn.php";

$query = "SELECT * FROM Prodi";
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
  <h2>Daftar Prodi</h2>
  <a href="create.php">Tambah Prodi</a>

  <table border=" 1">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>ID Fakultas</th>
      <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['idFakultas'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
          <a href="../../controller/ProdiController.php?action=delete&id=<?= $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>