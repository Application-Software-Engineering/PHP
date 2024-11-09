<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bangun Datar</title>
</head>
<body>
    <h3>Bangun Datar</h3>
    <?php
    function hitungSegitiga($alas, $tinggi){
        return 0.5 * $alas * $tinggi; 
    }
    function hitungPersegi($sisi){
        return $sisi * $sisi; 
    }
    function hitungLingkaran($radius){
        return 3.14 * $radius * $radius; 
    }

    function bangunDatar($typeBangunDatar, $val1, $val2 = 0){
        switch ($typeBangunDatar) {
            case 1:
                # inputan a, t
                echo "Segitiga";
                echo "<br> Luas : ".hitungSegitiga($val1,$val2);
                break;
            case 2:
                # inputan s
                echo "Persegi";
                echo "<br> Luas : ".hitungPersegi($val1);
                break;
            case 3:
                # inputan jari-jari
                echo "Lingkaran";
                echo "<br> Luas : ".hitungLingkaran($val1);
                break;
        }
    }
    bangunDatar(1,6,18);
    ?>
</body>
</html>