<?php
include "../../config/conn.php";

$id = $_GET['id'];
$query = "SELECT * FROM KRS WHERE id = $id";
$result = mysqli_query($conn, $query);
$krs = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit KRS</title>
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
        <h2>Edit KRS</h2>
        <form action="../../controller/KRSController.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?= $id ?>">
            <select name="mahasiswa_id" required>
                <option value="">Pilih Mahasiswa</option>
                <?php
                $mahasiswa_query = "SELECT * FROM Mahasiswa";
                $mahasiswa_result = mysqli_query($conn, $mahasiswa_query);
                while ($mahasiswa = mysqli_fetch_assoc($mahasiswa_result)) {
                    $selected = $mahasiswa['id'] == $krs['mahasiswa_id'] ? 'selected' : '';
                    echo "<option value='{$mahasiswa['id']}' $selected>{$mahasiswa['name']}</option>";
                }
                ?>
            </select>
            <select name="matakuliah_id" required>
                <option value="">Pilih Mata Kuliah</option>
                <?php
                $matakuliah_query = "SELECT * FROM MataKuliah";
                $matakuliah_result = mysqli_query($conn, $matakuliah_query);
                while ($matakuliah = mysqli_fetch_assoc($matakuliah_result)) {
                    $selected = $matakuliah['id'] == $krs['idMataKuliah'] ? 'selected' : '';
                    echo "<option value='{$matakuliah['id']}' $selected>{$matakuliah['name']}</option>";
                }
                ?>
            </select>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </main>
</body>

</html>