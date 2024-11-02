<html>
    <head>
        <title>Operator Aritmatika</title>
    </head>
    <body>
        <h3>Latihan Operator Aritmatika</h3>
        <br>
        <h3>Penjumlahan</h3>
<?php

// Operator PHP
// +, -, *, /, %, **, =
// Biasa digunakan untuk operasi aritmatika

$nilai1 = 5;
$nilai2 = 10;

// menambah value bukan mereplace
$nilai1 += 20;
echo "Operator += nilai1 adalah ".$nilai1."<br>";

$penjumlahan = $nilai1+$nilai2;
echo $nilai1.' + '.$nilai2.' = '.$penjumlahan;
?>

<h3>Pengurangan</h3>
<?php
$x = 20;
$y = 4;

// mengurangi value bukan mereplace
$x -= 2;
echo "Operator -= x adalah ".$x."<br>";

$pengurangan = $x-$y;
echo $x.' - '.$y.' = '.$pengurangan;
?>

<h3>Perkalian</h3>
<?php
$a = 15;
$b = 5;

$perkalian = $a*$b;
echo $a.' * '.$b.' = '.$perkalian;
?>

<h3>Pembagian</h3>
<?php
$z = 75;
$o = 5;

$pembagian = $z/$o;
echo $z.' / '.$o.' = '.$pembagian;
?>

<h3>% Sisa bagi</h3>
<?php 

$f = 20;
$g = 5;

$hasil_bagi = $f/$g;
$sisa_bagi = $f%$g;
echo $f.' % '.$g.' Sisa bagi = '.$sisa_bagi.' Hasil Bagi ='.$hasil_bagi;
?>

<h3>** Exponential</h3>
<?php

$l = 10;
$m = 3;

$exp = $l**$m;
echo $l.' ** '.$m.' = '.$exp;

?>
</body>
</html>
