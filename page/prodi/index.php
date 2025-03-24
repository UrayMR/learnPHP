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
  <title>Data Prodi</title>
</head>

<body>
  <h2>Data Prodi</h2>
  <a href="create.php">Tambah Prodi</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Kode Prodi</th>
      <th>Nama Prodi</th>
      <th>ID Fakultas</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['kodeProdi'] ?></td>
        <td><?php echo $row['namaProdi'] ?></td>
        <td><?php echo $row['idFakultas'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
          <a href="../../controller/ProdiController.php?action=delete&id=<?php echo $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>