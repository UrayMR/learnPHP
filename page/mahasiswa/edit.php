<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM Mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa</title>
</head>

<body>
  <h2>Edit Mahasiswa</h2>
  <form action="../../controller/MahasiswaController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" required>
      <input type="text" name="npm" value="<?php echo $row['npm'] ?>" required>
      <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
      <input type="text" name="idProdi" value="<?php echo $row['idProdi'] ?>" required>
      <button type="submit">Update</button>
    <?php endwhile; ?>
  </form>
</body>

</html>