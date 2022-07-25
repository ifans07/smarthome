<?php

require 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM sensor");
$row = mysqli_fetch_array($query);
$celcius = $row['celcius'];

if($celcius == "") $celcius = 0;

echo $celcius . "  C";
?>