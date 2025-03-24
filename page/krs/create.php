<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah KRS</title>
</head>

<body>
  <h2>Form Tambah KRS</h2>
  <form action="../../controller/KRSController.php" method="POST">
    <input type="hidden" name="action" value="create">
    <input type="text" name="npm" placeholder="NPM" required>
    <input type="text" name="idMataKuliah" placeholder="ID Mata Kuliah" required>
    <button type="submit">Tambah</button>
  </form>
</body>

</html>