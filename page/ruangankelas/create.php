<?php
include "../../config/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Ruangan Kelas</title>
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
    <h2>Form Tambah Ruangan Kelas</h2>
    <form action="../../controller/RuanganKelasController.php" method="POST">
      <input type="hidden" name="action" value="create">
      <input type="text" name="name" placeholder="Nama Ruangan" required>
      <input type="number" name="capacity" placeholder="Kapasitas" required>
      <select name="fakultas_id" required>
        <option value="">Pilih Fakultas</option>
        <?php
        $fakultas_query = "SELECT * FROM Fakultas";
        $fakultas_result = mysqli_query($conn, $fakultas_query);
        while ($fakultas = mysqli_fetch_assoc($fakultas_result)) {
          echo "<option value='{$fakultas['id']}'>{$fakultas['name']}</option>";
        }
        ?>
      </select>
      <button type="submit">Tambah</button>
    </form>
  </main>

</body>

</html>