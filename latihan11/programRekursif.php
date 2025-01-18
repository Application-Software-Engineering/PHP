<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Rekursif</title>
</head>
<body>
    <h1>Aplikasi Contoh Rekursif</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="program">Pilih Program</label>
                </td>
                <td>
                    : <select name="program" id="" required>
                        <option value="">Pilih</option>
                        <option value="1">Faktorial</option>
                        <option value="2">Fibonacci</option>
                        <option value="3">Penghitung Kata</option>
                        <option value="4">Penghitung Angka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nilai">Input Value </label>
                </td>
                <td>
                    : <input type="text" name="nilai" id="nilai" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    &nbsp <input type="submit" value="Run Program">
                </td>
            </tr>
        </table>
    </form>
</body>
<?php

include 'faktorial.php';
include 'fibonacci.php';
include 'menghitungAngka.php';
include 'menghitungHuruf.php';

if (!empty($_POST)) {
    $program = $_POST['program'];
    $nilai = $_POST['nilai'];
    echo '<br>';
    switch ($program) {
        case '1':
            echo "Faktorial '$nilai' adalah : ".faktorial($nilai);
            break;
        case '2':
            echo "Fibonacci '$nilai' adalah : ".fibonacci($nilai);
            break;
        case '3':
            echo "Jumlah Kata '$nilai' adalah : ".jumlahKarakter($nilai);
            break;
        case '4':
            echo "Jumlah Angka '$nilai' adalah : ".jumlahDigit($nilai);
            break;
        
        default:
            echo "Pilih program terlebih dahulu";
            break;
    }
}

?>
</html>