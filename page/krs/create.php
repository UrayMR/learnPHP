<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah KRS</title>
</head>

<body>
  <nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="../fakultas/index.php">Fakultas</a>
    <a href="../prodi/index.php">Prodi</a>
    <a href="../mahasiswa/index.php">Mahasiswa</a>
    <a href="../matakuliah/index.php">Mata Kuliah</a>
    <a href="../ruangankelas/index.php">Ruangan Kelas</a>
    <a href="index.php">KRS</a>
  </nav>
  <h2>Form Tambah KRS</h2>
  <form action="../../controller/KRSController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <select name="mahasiswa_id" required>
      <option value="">Pilih Mahasiswa</option>
      <?php
      $mahasiswa_query = "SELECT * FROM Mahasiswa";
      $mahasiswa_result = mysqli_query($conn, $mahasiswa_query);
      while ($mahasiswa = mysqli_fetch_assoc($mahasiswa_result)) {
        echo "<option value='{$mahasiswa['id']}'>{$mahasiswa['name']}</option>";
      }
      ?>
    </select>
    <select name="matakuliah_id" required>
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
</body>

</html>