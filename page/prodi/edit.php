<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM Prodi WHERE id = $id";
$result = mysqli_query($conn, $query);
$prodi = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Prodi</title>
  <link rel="stylesheet" href="../../style.css">
</head>

<body>
  <header>
    <nav>
      <a href="../../dashboard.php">Home</a>
      <a href="../fakultas/index.php">Fakultas</a>
      <a href="../prodi/index.php">Prodi</a>
      <a href="../mahasiswa/index.php">Mahasiswa</a>
      <a href="../matakuliah/index.php">Mata Kuliah</a>
      <a href="../ruangankelas/index.php">Ruangan Kelas</a>
      <a href="../krs/index.php">KRS</a>
    </nav>
  </header>

  <main>
    <h2>Edit Prodi</h2>
    <form action="../../controller/ProdiController.php" method="POST">
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="text" name="name" value="<?= $prodi['name'] ?>" required>
      <select name="fakultas_id" required>
        <option value="">Pilih Fakultas</option>
        <?php
        $fakultas_query = "SELECT * FROM Fakultas";
        $fakultas_result = mysqli_query($conn, $fakultas_query);
        while ($fakultas = mysqli_fetch_assoc($fakultas_result)) {
          $selected = $fakultas['id'] == $prodi['fakultas_id'] ? 'selected' : '';
          echo "<option value='{$fakultas['id']}' $selected>{$fakultas['name']}</option>";
        }
        ?>
      </select>
      <button type="submit">Simpan Perubahan</button>
    </form>
  </main>
</body>

</html>