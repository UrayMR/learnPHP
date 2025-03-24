<?php
include "./config/conn.php";

$datas = [
  [
    'name' => 'Mahasiswa',
    'count' => 0
  ],
  [
    'name' => 'Fakultas',
    'count' => 0
  ],
  [
    'name' => 'Prodi',
    'count' => 0
  ],
];

foreach ($datas as $key => $data) {
  $tableName = $data['name'];
  $query = "SELECT COUNT(*) as count FROM $tableName";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $datas[$key]['count'] = $row['count'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <a href="">Home</a>
      <a href="">Mahasiswa</a>
      <a href="">Universitas</a>
      <a href="">Fakultas</a>
      <a href="">Prodi</a>
      <a href="">Provinsi</a>
    </nav>
  </header>

  <main>
    <section>
      <h1>
        Dashboard
      </h1>

      <?php foreach ($datas as $data) : ?>
        <div>
          <h3>
            Total <?php echo $data['name']; ?>
          </h3>
          <p>
            <?php echo $data['count']; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </section>
  </main>
</body>

</html>