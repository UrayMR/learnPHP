<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Prodi</title>
</head>

<body>
  <h2>Form Tambah Prodi</h2>
  <form action="../../controller/ProdiController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="kodeProdi" placeholder="Kode Prodi" required>
    <input type="text" name="namaProdi" placeholder="Nama Prodi" required>
    <input type="text" name="idFakultas" placeholder="ID Fakultas" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>