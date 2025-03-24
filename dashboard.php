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
  [
    'name' => 'MataKuliah',
    'count' => 0
  ],
  [
    'name' => 'RuanganKelas',
    'count' => 0
  ],
  [
    'name' => 'KRS',
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

$queryMahasiswa = "
  SELECT m.npm, m.name AS Mahasiswa, p.name AS Prodi, f.name AS Fakultas, 
         COUNT(mk.id) AS MataKuliahCount, 
         COALESCE(SUM(mk.sks), 0) AS TotalSKS
  FROM Mahasiswa m
  JOIN Prodi p ON m.idProdi = p.id
  JOIN Fakultas f ON p.idFakultas = f.id
  LEFT JOIN MataKuliah mk ON mk.idProdi = p.id
  GROUP BY m.npm
  ORDER BY m.npm
  LIMIT 5
";

$resultMahasiswa = mysqli_query($conn, $queryMahasiswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <style>
    #dashboardContainer {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;

      .card {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <a href="dashboard.php">Home</a>
      <a href="./page/fakultas/index.php">Fakultas</a>
      <a href="./page/prodi/index.php">Prodi</a>
      <a href="./page/mahasiswa/index.php">Mahasiswa</a>
      <a href="./page/matakuliah/index.php">Mata Kuliah</a>
      <a href="./page/ruangankelas/index.php">Ruangan Kelas</a>
      <a href="./page/krs/index.php">KRS</a>
    </nav>
  </header>

  <main>
    <h1>
      Dashboard
    </h1>

    <section id="dashboardContainer">
      <?php foreach ($datas as $data) : ?>
        <div class="card">
          <h3>Total <?php echo $data['name']; ?></h3>
          <p><?php echo $data['count']; ?></p>
        </div>
      <?php endforeach; ?>
    </section>


    <h2>5 Mahasiswa Teratas</h2>
    <table border="1">
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>Jumlah Mata Kuliah</th>
        <th>Total SKS</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($resultMahasiswa)) : ?>
        <tr>
          <td><?= $row['npm'] ?></td>
          <td><?= $row['Mahasiswa'] ?></td>
          <td><?= $row['Prodi'] ?></td>
          <td><?= $row['Fakultas'] ?></td>
          <td><?= $row['MataKuliahCount'] ?></td>
          <td><?= $row['TotalSKS'] ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </main>
</body>

</html>