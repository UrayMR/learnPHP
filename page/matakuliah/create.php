<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Form Tambah Mata Kuliah</h2>
  <form action="../../controller/MataKuliahController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="npm" placeholder="npm" required>
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="prodi" placeholder="prodi" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>