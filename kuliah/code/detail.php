<?php
require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<style>
  body {
    background-color: gray;
  }

  h2 {
    text-align: center;
  }

  ul {
    text-align: center;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="100px"></li>
    <li>NIM : <?= $m['nim']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">kembali</a></li>
  </ul>
</body>

</html>