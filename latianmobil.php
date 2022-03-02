<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan Penilaian Mobil</h1>
<?php
$mobil = "Mesin Bagus dan Body Bagus";
if($mobil == "Mesin Bagus dan Body Bagus"){
	echo "Mobil ini dikategorikan BAGUS";
}elseif($mobil == "Mesin Bagus dan Body Jelek"){
	echo "Mobil ini dikategorikan MENENGAH";
}elseif($mobil == "Body Bagus dan Mesin Jelek"){
	echo "Mobil ini dikategorikan MENENGAH";
}else{
	echo "Mobil ini dikategorikan JELEK ATAU TIDAK BAGUS";
}
?>