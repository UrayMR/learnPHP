<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Mata Kuliah</title>
</head>

<body>
  <nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="../fakultas/index.php">Fakultas</a>
    <a href="../prodi/index.php">Prodi</a>
    <a href="../mahasiswa/index.php">Mahasiswa</a>
    <a href="index.php">Mata Kuliah</a>
    <a href="../ruangankelas/index.php">Ruangan Kelas</a>
    <a href="../krs/index.php">KRS</a>
  </nav>
  <h2>Form Tambah Mata Kuliah</h2>
  <form action="../../controller/MataKuliahController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="name" placeholder="Nama Mata Kuliah" required>
    <input type="number" name="sks" placeholder="SKS" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>