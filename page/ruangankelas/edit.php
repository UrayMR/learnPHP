<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM RuanganKelas WHERE id = $id";
$result = mysqli_query($conn, $query);
$ruangan = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Ruangan Kelas</title>
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
    <h2>Edit Ruangan Kelas</h2>
    <form action="../../controller/RuanganKelasController.php" method="POST">
      <input type="hidden" name="action" value="edit">
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="text" name="name" value="<?= $ruangan['name'] ?>" required>
      <input type="number" name="capacity" value="<?= $ruangan['capacity'] ?>" required>
      <button type="submit">Simpan Perubahan</button>
    </form>
  </main>

</body>

</html>