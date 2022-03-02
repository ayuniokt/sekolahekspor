<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan 2</h1>
    <?php
    //aritmatika
       $a = 12;
       $b = 6;
       
       // penjumlahan
       $c = $a + $b;
       echo "$a + $b = $c";
       echo "<hr>";
       
       // pengurangan
       $c = $a - $b;
       echo "$a - $b = $c";
       echo "<hr>";
       
       // Perkalian
       $c = $a * $b;
       echo "$a * $b = $c";
       echo "<hr>";
       
       // Pembagian
       $c = $a / $b;
       echo "$a / $b = $c";
       echo "<hr>";
       
       // Sisa bagi
       $c = $a % $b;
       echo "$a % $b = $c";
       echo "<hr>";
       
       // Pangkat
       $c = $a ** $b;
       echo "$a ** $b = $c";
 
        $equal          = $a == $b ? 'True' : 'False'; 
        $identical      = $a === $b ? 'True' : 'False'; 
        $not_eq         = $a != $b ? 'True' : 'False'; 
        $not_identical  = $a !== $b ? 'True' : 'False'; 

        echo "<hr>";
        echo "a == b = $equal              
        <hr>";
        echo "a === b = $identical
        <hr>";
        echo "a != b = $not_eq 
        <hr>";
        echo "a !== b = $not_identical
        <hr>";

        
       //increment
       echo "<br>";
       $point = 0;
       $point++;
       $point++;
       $point++;

       echo $point;

       //dicrement
       echo "<br>";
       $point = 12;
       $point--;

       echo $point;
       ?>

</body>
</html>