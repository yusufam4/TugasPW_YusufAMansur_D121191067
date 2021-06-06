<?php
require "functions.php";

// ambil id dari query
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail mahasiswa</title>
</head>

<body>
  <h3>Detail mahasiswa</h3>

  <ul>
    <li><img src="<?= $m['gambar']; ?>" width="180"></li>
    <li>nim : <?= $m['nim']; ?></li>
    <li>nama : <?= $m['nama']; ?></li>
    <li>email : <?= $m['email']; ?></li>
    <li>jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>