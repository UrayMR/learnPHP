<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM RuanganKelas WHERE id = $id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Ruangan Kelas</title>
</head>

<body>
  <h2>Edit Ruangan Kelas</h2>
  <form action="../../controller/RuanganKelasController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" required>
      <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
      <input type="number" name="capacity" value="<?php echo $row['capacity'] ?>" required>
      <button type="submit">Update</button>
    <?php endwhile; ?>
  </form>
</body>

</html>