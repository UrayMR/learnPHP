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
  <title>Data Ruangan Kelas</title>
</head>

<body>
  <h2>Data Ruangan Kelas</h2>
  <a href="create.php">Tambah Ruangan Kelas</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nama Ruangan</th>
      <th>Kapasitas</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name '] ?></td>
        <td><?php echo $row['capacity'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
          <a href="../../controller/RuanganKelasController.php?action=delete&id=<?php echo $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>