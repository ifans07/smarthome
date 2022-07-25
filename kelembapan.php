<?php

require 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM sensor");
$row = mysqli_fetch_array($query);
$kelembapan = $row['kelembapan'];

if($kelembapan == "") $kelembapan = 0;

echo $kelembapan . " %";
?>