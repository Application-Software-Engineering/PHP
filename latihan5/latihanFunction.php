<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <!-- Function adalah satu blok perintah yang bisa digunakan berulang kali. -->
    <?php

    function HelloWorld() {
        echo "Hello World";
        echo "<br>";
    }
    HelloWorld();


    function tampilAngka($nilai) {
        echo "<br>";
        echo "My Nilai Adalah ".$nilai."<br>";;
        echo "Nilaiku dibagi 2 adalah :".$nilai/2;
    }
    tampilAngka(100);

    function tampilNama($nama) {
        echo "<br>";
        echo "<h3>Nama Saya Adalah ".$nama."</h3>";
    }
    tampilNama("Fahad");

    function aseKrw($mhs, $nik){
        echo "<br>";
        echo $mhs." aseKrw-nik: ".$nik;
    }
    aseKrw("Bayu","2001");
    aseKrw("Fahad","2002");
    aseKrw("Faisal","2003");
    aseKrw("Rafi","2004");

    echo "<br>";
    echo "<br>";

    function cihuy($Nama, $Tahun) {
        echo "Nama ".$Nama.","." lahir pada tahun ".$Tahun;
    }
    cihuy("Budiono", 2006);

    echo "<br>";
    echo "<br>";

    function cekUmur($thn){
        $anu = date("Y");
        $umur = $anu-$thn;
        echo "Jika Kamu Lahir Tahun ".$thn." Maka Umur Kamu Sekarang ".$umur." Tahun";
    }
    cekUmur(2006);

    echo "<br>";

        // Default parameter inputan
    function tinggiBangunan($minHeight = 10){
        echo "<br>";
        echo "Tinggi gedung ".$minHeight." meter";
    }
    tinggiBangunan(100);
    tinggiBangunan();
    tinggiBangunan(40);

    echo "<br>";
    echo "<br>";

    function sum($x, $y){
        echo $x." + ".$y." = ";
        $z = $x + $y;
        echo $z."<br>";
    }
    sum(1,1);
    sum(10,12);
    sum(30,60);

    echo "<br>";

    function luasSegitiga($alas, $tinggi){
        $rumus = 0.5*$alas*$tinggi;
        echo "L = 1/2 x alas x tinggi";
        echo "<br>";
        echo $alas." * ".$tinggi. "/2 = ".$rumus;
    }
    luasSegitiga(6,18);

    echo "<br>";
    echo "<br>";

    function luasPersegi($sisi1,$sisi2){
        $rumus = $sisi1*$sisi2;
        echo "L = s x s";
        echo "<br>";
        echo $sisi1." * ".$sisi2." = ".$rumus;
    }
    luasPersegi(4,4);
    echo "<br>";
    echo "<br>";


    function luasLingkaran($radius){
        $luasLkr = 3.14 * $radius * $radius;
        echo 3.14." * ".$radius." * ".$radius." = ".$luasLkr;
    }
    luasLingkaran(20)
    ?>
</body>
</html>