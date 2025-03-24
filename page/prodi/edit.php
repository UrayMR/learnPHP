<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM Prodi WHERE id = $id";
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
  <h2>Edit Prodi</h2>

  <form action="../../controller/ProdiController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" required>
      <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
      <input type="text" name="idFakultas" value="<?php echo $row['idFakultas'] ?>" required>
      <button type="submit">Edit</button>
    <?php endwhile; ?>
  </form>
</body>

</html>