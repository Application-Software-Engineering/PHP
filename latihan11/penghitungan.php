<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan</title>
</head>
<body>
    <h1>Pilih Metode Rekursif</h1>
    <form method="post">
        <select name="hitung">
            <option value="">Pilih</option>
            <option value="faktorial">Faktorial</option>
            <option value="fibonacci">Fibonacci</option>
            <option value="h-angka">Hitung jumlah angka</option>
            <option value="h-huruf">Hitung jumlah huruf</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>

<?php

include 'faktorial.php';
include 'fibonacci.php';
include 'menghitungAngka.php';
include 'menghitungHuruf.php';

if (!empty($_POST["hitung"])) {
    $pilihan = $_POST["hitung"];
    
    function displayFaktorial() {
        echo '<h4>Rekursif Faktorial</h4>
        <form method="post">
        <input type="hidden" name="hitung" value="faktorial">
        <input type="text" name="fakto" placeholder="Masukan nilai">
        <button type="submit">Submit</button>
    </form>';
    }
    function displayFibonacci() {
        echo '<h4>Rekursif Fibonacci</h4>
        <form method="post">
        <input type="hidden" name="hitung" value="fibonacci">
        <input type="text" name="fibo" placeholder="Masukan nilai">
        <button type="submit">Submit</button>
    </form>';
    }
    function displayHitungAngka() {
        echo '<h4>Rekursif Hitung Angka</h4>
        <form method="post">
        <input type="hidden" name="hitung" value="h-angka">
        <input type="text" name="hangka" placeholder="Masukan nilai">
        <button type="submit">Submit</button>
    </form>';
    }
    function displayHitungHuruf() {
        echo '<h4>Rekursif Hitung Huruf</h4>
        <form method="post">
        <input type="hidden" name="hitung" value="h-huruf">
        <input type="text" name="hhuruf" placeholder="Masukan nilai">
        <button type="submit">Submit</button>
    </form>';
    }

    switch ($pilihan) {
        case 'faktorial':
            displayFaktorial();
            if (!empty($_POST['fakto'])) {
                $input = $_POST['fakto'];
                echo "<br> Jumlah faktorial dari '$input' adalah : ".faktorial($input);
            }
            break;
        case 'fibonacci':
            displayFibonacci();
            if (!empty($_POST['fibo'])) {
                $input = $_POST['fibo'];
                echo "<br> Hasil fibonacci dari '$input' adalah : ".fibonacci($input);
            }
            break;
        case 'h-angka':
            displayHitungAngka();
            if (!empty($_POST['hangka'])) {
                $input = $_POST['hangka'];
                echo "<br> Jumlah digit angka dalam kata '$input' adalah : ".jumlahDigit($input);
            }
            break;
        case 'h-huruf':
            displayHitungHuruf();
            if (!empty($_POST['hhuruf'])) {
                $input = $_POST['hhuruf'];
                echo "<br> Jumlah digit huruf dalam kata '$input' adalah : ".jumlahKarakter($input);
            }
            break;
        
        default:
            echo "<h1> Harap pilih inputan </h1>";
            break;
    }

}

?>

</html>