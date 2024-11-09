<?php
include "koneksi.php";
$NIDN =$_POST['KODE'];
$NAMA_LENGKAP = $_POST['NAMA'];
$RUMPUN = $_POST['KEAHLIAN'];
$TEMPAT_LAHIR = $_POST['TEMPAT'];
$TANGGAL = $_POST['TANGGAL'];
$EMAIL = $_POST['EMAIL'];

$simpan = "INSERT INTO biodata_dosen (NIDN,NAMA_LENGKAP,RUMPUN,TEMPAT_LAHIR,TANGGAL_LAHIR,EMAIL) VALUES 
('$NIDN','$NAMA_LENGKAP','$RUMPUN','$TEMPAT_LAHIR','$TANGGAL_LAHIR','$EMAIL')"; 
mysqli_query($koneksi, $simpan);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
        <div class="card">
  <div class="card-header">
   <h3>Form DOSEN</h3> 
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
  </thead>
  <tbody>
    <tr>
      <th scope="row">kode</th>
      <td>:<?=$kode ?></td>
    </tr>
    <tr>
        <th scope="row">jurusan</th>
        <td>:<?=$jurusan ?></td>
    </tr>
  </tbody>
</table>
<a href="INDEX.PHP" class="btn btn-primary">kembali</a>
</div>
</div>
</body>
</html>