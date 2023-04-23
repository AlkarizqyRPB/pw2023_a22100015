<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<style>
  body {
    background-color: gray;
  }

  h3 {
    text-align: center;
  }

  div {
    text-align: center;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    text-align: center
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <div>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
  </div>
  <br><br>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" heigth="100px" width="100px"></td>
        <td><?= $m['nama']; ?></td>
        <td><a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>