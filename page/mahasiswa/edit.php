<?php
include "../../config/conn.php";

$npm = $_GET['npm'];
$query = "SELECT * FROM Mahasiswa WHERE npm = $npm";
$result = mysqli_query($conn, $query);
$mahasiswa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa</title>
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
    <h2>Edit Mahasiswa</h2>
    <form action="../../controller/MahasiswaController.php" method="POST">
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="text" name="npm" value="<?= $mahasiswa['npm'] ?>" required>
      <input type="text" name="name" value="<?= $mahasiswa['name'] ?>" required>
      <select name="prodi_id" required>
        <option value="">Pilih Prodi</option>
        <?php
        $prodi_query = "SELECT * FROM Prodi";
        $prodi_result = mysqli_query($conn, $prodi_query);
        while ($prodi = mysqli_fetch_assoc($prodi_result)) {
          $selected = $prodi['id'] == $mahasiswa['idProdi'] ? 'selected' : '';
          echo "<option value='{$prodi['id']}' $selected>{$prodi['name']}</option>";
        }
        ?>
      </select>
      <button type="submit">Simpan Perubahan</button>
    </form>
  </main>
</body>

</html>