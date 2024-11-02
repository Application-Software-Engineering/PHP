<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
    <h3>Perbandingan value (==)</h3>
    $x = 100;
    $y = "100";
    <?php
    $x = 100;
    $y = "100";

    // Membandingkan value
    echo "Hasil = ";
    var_dump($x == $y);
    ?>

    <h3>Perbandingan value dan tipe data (===)</h3>
    $x = 100;
    $y = "100";
    <?php
    $x = 100;
    $y = "100";

    // Membandingkan value dan tipe data
    echo "Hasil = ";
    var_dump($x === $y);
    ?>

    <h3>Bukan/Tidak Sama Dengan (!= ; <> ; !==) </h3>
    <?php
    $x = 100;
    $y = "100";
    echo "x =".$x;
    echo "<br>";
    echo "y =".$y;
    echo "<br>";
    echo "Hasil != ";
    var_dump($x != $y);

    echo "<br>";
    echo "Hasil <> ";
    var_dump($x <> $y);

    echo "<br>";
    echo "Hasil !== ";
    var_dump($x !== $y);
    ?>

    <h3>Lebih Dari (>) </h3>
    <?php
    $x = 100;
    $y = "100";
    echo "x =".$x;
    echo "<br>";
    echo "y =".$y;
    echo "<br>";
    echo "Hasil > ";
    var_dump($x > $y);
    ?>

    <h3>Kurang Dari (<) </h3>
    <?php
    $x = 100;
    $y = "100";
    echo "x =".$x;
    echo "<br>";
    echo "y =".$y;
    echo "<br>";
    echo "Hasil < ";
    var_dump($x < $y);
    ?>

    <h3>Lebih Dari Sama Dengan (>=) </h3>
    <?php
    $x = 100;
    $y = "100";
    echo "x =".$x;
    echo "<br>";
    echo "y =".$y;
    echo "<br>";
    echo "Hasil >= ";
    var_dump($x >= $y);
    ?>

    <h3>Kurang Dari Sama Dengan (<=) </h3>
    <?php
    $x = 100;
    $y = "100";
    echo "x =".$x;
    echo "<br>";
    echo "y =".$y;
    echo "<br>";
    echo "Hasil <= ";
    var_dump($x <= $y);
    ?>
    <h3>Spaceship (<=>) </h3>
    <?php
    /*
    - Jika kurang dari outputnya : -1
    - Jika sama dengan outputnya : 0
    - Jika lebih dari outputnya : 1
    */

    $x = 5;
    $y = 10;
    
    echo "Compare ".$x." Dengan ".$y." Hasil <= ".($x <=> $y)."<br>";
    
    $x = 11;
    $y = 7;
    
    echo "Compare ".$x." Dengan ".$y." Hasil => ".($x <=> $y)."<br>";
    
    $x = 10;
    $y = 10;
    
    echo "Compare ".$x." Dengan ".$y." Hasil = ".($x <=> $y)."<br>";
    ?>
</body>
</html>