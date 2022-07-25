<?php

require 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM sensor");
$row = mysqli_fetch_array($query);
$lpg = $row['lpg'];

if($lpg == "") $lpg = 0;

echo $lpg . " mg";
?>