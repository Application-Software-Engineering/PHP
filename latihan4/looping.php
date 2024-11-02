<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop PHP</title>
</head>
<body>
    <h3>While Loop</h3>
    <?php
    $i = 1;
    while ($i < 10) {
        echo $i;
        $i++;
    }
    ?>

    <h3>Do...While Loop</h3>
    <?php
    $i = 1;
    do {
        echo $i;
        $i++;
    } while ($i < 10);
    ?>

    <h3>For Loop</h3>
    <?php
    for ($i=1; $i < 10; $i++) { 
        echo $i;
    }
    ?>

    <h3>Foreach</h3>
    <?php
    $ase10 = array("Fahad", "Faisal", "Rafi"); # ["Fahad", "Faisal", "Rafi"]; 
    foreach ($ase10 as $value) {
        echo $value."<br>";
    }
    ?>

    <h3>Cetak Nama</h3>
    <?php
    $nama = "Fahadzz";
    for ($i=1; $i < 10; $i++) { 
        echo $i." ".$nama."<br>";
    }
    ?>

    <h3>Cek Bilangan</h3>
    <?php
    $angka = 5;
    echo "<h4>Bilangan Genap < ".$angka."</h4>";
    for ($i=1; $i <= $angka; $i++) { 
        if (($i % 2) == 0) {
            echo $i."<br>";
        }
    }
    echo "<h4>Bilangan Ganjil < ".$angka."</h4>";
    for ($i=1; $i <= $angka; $i++) { 
        if (($i % 2) == 1) {
            echo $i."<br>";
        }
    }
    ?>

    <h3>Cek Kelas</h3>
    <?php
    $mhsw = array(
        "Ari" => "ASE10",
        "Bayu" => "ASE10",
        "Nina" => "ASE10",
        "Neo" => "ASE24",
        "Ikhsan" => "ASE24",
        "Arpan" => "ASE24",
    );
    foreach ($mhsw as $nama => $kelas) {
        echo $nama." Adalah Mahasiswa LP3I Kelas ".$kelas."<br>";
    }
    
    ?>

    <h3>Membuat Segitiga dengan loop</h3>
    <?php
    for ($i=1; $i <= 10; $i++) {
        for ($j=1; $j <= $i; $j++) { 
            echo "*";
        }
        echo "<br>"; 
    }
    ?>

    <h3>Latihan Array</h3>
    <?php
    $person = [
        "Ari" => "18",
        "Bayu" => "18",
        "Nina" => "20",
        "Neo" => "19",
        "Ikhsan" => "20",
        "Arpan" => "19",
        "Faisal" => "24",
        "Rafi" => "19",
        "Danar" => "20",
        "Mul" => "18",
    ];
    foreach ($person as $nama => $usia) {
        echo $nama." berusia ".$usia."<br>";
    }
    ?>
</body>
</html>