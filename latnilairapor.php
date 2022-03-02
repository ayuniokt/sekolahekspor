<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan Nilai Rapor</h1>
<?php
$nilai = 60;
    $hasil = "";

    if($nilai >= 80){
        $hasil = "A";
    }else if($nilai >= 60){
        $hasil = "B";
    }else{
        $hasil = "C";
    }

    $print = $nilai >= 0 && $nilai <= 100 ? "Nilai kamu $hasil" : "Nilai yang dimasukkan salah";
    echo $print;
    ?>

</body>
</html>