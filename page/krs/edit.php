<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM KRS WHERE id = $id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit KRS</title>
</head>

<body>
  <h2>Edit KRS</h2>
  <form action="../../controller/KRSController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" required>
      <input type="text" name="npm" value="<?php echo $row['npm'] ?>" required>
      <input type="text" name="idMataKuliah" value="<?php echo $row['idMataKuliah'] ?>" required>
      <button type="submit">Update</button>
    <?php endwhile; ?>
  </form>
</body>

</html>