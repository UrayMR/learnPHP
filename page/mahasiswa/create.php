<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Mahasiswa</title>
</head>

<body>
  <h2>Form Tambah Mahasiswa</h2>
  <form action="../../controller/MahasiswaController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="npm" placeholder="NPM" required>
    <input type="text" name="name" placeholder="Nama Mahasiswa" required>
    <input type="text" name="idProdi" placeholder="ID Prodi" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>