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
  <title>Data Mata Kuliah</title>
</head>

<body>
  <h2>Data Mata Kuliah</h2>
  <a href="create.php">Tambah Mata Kuliah</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nama Mata Kuliah</th>
      <th>ID Prodi</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['idProdi'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
          <a href="../../controller/MataKuliahController.php?action=delete&id=<?php echo $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>