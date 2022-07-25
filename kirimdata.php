<?php

    require 'koneksi.php';

    //baca data yang dikirim node mcu
    $celcius = $_GET["celcius"];
    $kelembapan = $_GET["kelembapan"];
    $lpg = $_GET["lpg"];

    mysqli_query($koneksi, "ALTER TABLE sensor AUTO_INCREMENT=1")

    //update data di database (tabel sensor)
    $result = mysqli_query($koneksi, "INSERT INTO sensor VALUES('$celcius', '$kelembapan', '$lpg')");

    if($result){
    	echo "Berhasil Dikirim";
    }else{
    	echo "Gagal Dikirim";
    }
    if(!$result){
        die('invalid query: ' . mysqli_error($koneksi));
    }
?>