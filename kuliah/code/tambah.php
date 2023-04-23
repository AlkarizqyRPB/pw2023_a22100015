<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "gagal masuk";
  }
}

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

  form {
    background-color: grey;
    color: black;
    text-align: justify;
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 300px;
    margin: 50px auto;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Mahasiswa</title>
</head>

<body>
  <h3>Masukan Data</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NIM :
          <input type="text" name="nim" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah data</button>

    </ul>
  </form>
</body>

</html>