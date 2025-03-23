<?php
include "conn.php";

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

  <form action="formController.php" method="POST">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="npm" value="<?php echo $row['npm'] ?>">
      <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
      <button type="submit">Edit</button>
    <?php endwhile; ?>
  </form>
</body>

</html>