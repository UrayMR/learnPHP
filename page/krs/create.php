<?php
include "../../config/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h2>Form Tambah KRS</h2>
    <form action="../../controller/KRSController.php" method="POST">
      <input type="hidden" name="action" value="create">
      <select name="npm" required>
        <option value="">Pilih Mahasiswa</option>
        <?php
        $mahasiswa_query = "SELECT * FROM Mahasiswa";
        $mahasiswa_result = mysqli_query($conn, $mahasiswa_query);
        while ($mahasiswa = mysqli_fetch_assoc($mahasiswa_result)) {
          echo "<option value='{$mahasiswa['npm']}'>{$mahasiswa['name']}</option>";
        }
        ?>
      </select>
      <select name="idMataKuliah" required>
        <option value="">Pilih Mata Kuliah</option>
        <?php
        $matakuliah_query = "SELECT * FROM MataKuliah";
        $matakuliah_result = mysqli_query($conn, $matakuliah_query);
        while ($matakuliah = mysqli_fetch_assoc($matakuliah_result)) {
          echo "<option value='{$matakuliah['id']}'>{$matakuliah['name']}</option>";
        }
        ?>
      </select>
      <button type="submit">Tambah</button>
    </form>
  </main>
</body>

</html>