<?php
include "../../config/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Mahasiswa</title>
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
    <h2>Form Tambah Mahasiswa</h2>
    <form action="../../controller/MahasiswaController.php" method="POST">
      <input type="hidden" name="action" value="create">
      <input type="text" name="npm" placeholder="NPM" required>
      <input type="text" name="name" placeholder="Nama Mahasiswa" required>
      <select name="prodi_id" required>
        <option value="">Pilih Prodi</option>
        <?php
        $prodi_query = "SELECT * FROM Prodi";
        $prodi_result = mysqli_query($conn, $prodi_query);
        while ($prodi = mysqli_fetch_assoc($prodi_result)) {
          echo "<option value='{$prodi['id']}'>{$prodi['name']}</option>";
        }
        ?>
      </select>
      <button type="submit">Tambah</button>
    </form>
  </main>
</body>

</html>