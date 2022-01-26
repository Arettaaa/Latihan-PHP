<?php
    //no 1
    //menghitung luas persegi
    $a = 4;
    $b = 4;

    //masukan rumus luas persegi
    $luaspersegi = ($a * $b );

    //tampilkan
    echo "Luas persegi yang memiliki sisi $a cm adalah $luaspersegi cm";
    
    echo "<br>";
    
    //no 2
    //menghitung luas lingkaran
    $c = 3.14;
    $d = 8;

    //masukan rumus luas lingkaran
    $luaslingkaran = ($c * $d *$d) ;

    //tampilkan
    echo "Luas lingkaran yang memiliki jari-jari $d cm adalah $luaslingkaran cm";

    echo "<br>";
    
    //no 3
    //membandingkan angka 19 dan 20
    $e = 20 ;
    $f = 19 ;
    
   //menggunakan operator relasi lebih besar
   $g = $e > $f;
   echo "$e > $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih kecil
   $g = $e < $f;
   echo "$e < $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih sama dengan
   $g = $e == $f;
   echo "$e == $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih tidak sama dengan
   $g = $e != $f;
   echo "$e != $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih besar sama dengan
   $g = $e >= $f;
   echo "$e >= $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih kecil sama dengan
   $g = $e <= $f;
   echo "$e <= $f: $g";
   echo "<hr>";
?>
