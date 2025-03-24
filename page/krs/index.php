<?php
include "../../config/conn.php";

$query = "SELECT * FROM KRS";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data KRS</title>
</head>

<body>
  <h2> Data KRS</h2>
  <a href="create.php">Tambah KRS</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>NPM</th>
      <th>ID Mata Kuliah</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['npm'] ?></td>
        <td><?php echo $row['idMataKuliah'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
          <a href="../../controller/KRSController.php?action=delete&id=<?php echo $row['id'] ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>