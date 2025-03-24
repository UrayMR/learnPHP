<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Prodi</title>
</head>

<body>
  <nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="../fakultas/index.php">Fakultas</a>
    <a href="index.php">Prodi</a>
    <a href="../mahasiswa/index.php">Mahasiswa</a>
    <a href="../matakuliah/index.php">Mata Kuliah</a>
    <a href="../ruangankelas/index.php">Ruangan Kelas</a>
    <a href="../krs/index.php">KRS</a>
  </nav>
  <h2>Form Tambah Prodi</h2>
  <form action="../../controller/ProdiController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="name" placeholder="Nama Prodi" required>
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
</body>

</html>