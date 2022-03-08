<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan Perulangan || Ayuni Oktavianingrum</h1>
    <?php
    $nama   = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    
    //menghitung nilai inputan
    $hasil_nilai1 = $nilai1*0.25;
    $hasil_nilai2 = $nilai2*0.75;
    
    
    
    //pemetaan grade nilai 1
    if($nilai1 >= 80){
        $grade1 = "A";
    }elseif ($nilai1 >= 60) {
        $grade1 = "B";
    }elseif ($nilai1 < 60){
        $grade1 = "C";
    }
    
    //pemetaan grade nilai 2
    if($nilai2 >= 80){
        $grade2 = "A";
    }elseif ($nilai2 >= 60) {
        $grade2 = "B";
    }elseif ($nilai2 < 60){
        $grade2 = "C";
    }
    
    for($i=1; $i<=10; $i++){
        echo "<h4>Nama : $nama</h4>";
        echo "<h4>Nilai Indonesia : $nilai1</h4>";
        echo "<h4>Grade Indonesia : $grade1</h4>";
        echo "<h4>Nilai Matematika : $nilai2</h4>";
        echo "<h4>Grade Matematika : $grade2</h4>";
        echo "</br>";
    
    }
    ?>
