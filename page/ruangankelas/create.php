<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Ruangan Kelas</title>
</head>

<body>
  <h2>Form Tambah Ruangan Kelas</h2>
  <form action="../../controller/RuanganKelasController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="name" placeholder="Nama Ruangan" required>
    <input type="number" name="capacity" placeholder="Kapasitas" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>