<?php
include "../../config/conn.php";

$npm = $_GET['npm'];
$query = "SELECT * FROM mahasiswa WHERE npm = $npm";
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
  <h2>Edit Mahasiswa</h2>

  <form action="../../controller/MahasiswaController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="npm" value="<?php echo $row['npm'] ?>">
      <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
      <input type="text" name="prodi" value="<?php echo $row['prodi'] ?>" required>
      <button type="submit">Edit</button>
    <?php endwhile; ?>
  </form>
</body>

</html>