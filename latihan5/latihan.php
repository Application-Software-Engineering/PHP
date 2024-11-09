<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bangun Datar</title>
</head>
<body>
    <!-- BELUM BERESSSSS -->
    <h3>Pilih Bangun Datar Favoritmu:</h3>
    <form action="" method="post">
        <select name="typenya">
            <option value="1">Segitiga</option>
            <option value="2">Persegi</option>
            <option value="3">Lingkaran</option>
        </select>
        <button type="submit">Pilih</button>
    </form>
    <!-- <form action="" method="post">
        <input type="text" name="val1" placeholder="Masukan Alas">
        <input type="text" name="val2" placeholder="Masukan Tinggi">
        <button type="submit">Hitung</button>
    </form> -->

    <?php
    if (!empty($_POST)) {
        function hitungSegitiga($alas, $tinggi){
            return 0.5 * $alas * $tinggi; 
        }
        function hitungPersegi($sisi){
            return $sisi * $sisi; 
        }
        function hitungLingkaran($radius){
            return 3.14 * $radius * $radius; 
        }

        $typeBangunDatar = $_POST["typenya"];

        // function bangunDatar($typeBangunDatar, $val1, $val2 = 0){
        switch ($typeBangunDatar) {
            case 1:
                # inputan a, t
                echo "Segitiga";
                echo '<form action="" method="post">';
                echo '<input type="hidden" name="typenya" value="1">';
                echo '<input type="text" name="val1" placeholder="Masukan Alas">';
                echo '<input type="text" name="val2" placeholder="Masukan Tinggi">';
                echo '<button type="submit">Hitung</button>';
                echo '</form>';
                if (!empty($_POST['val1'])) {
                    echo $_POST['val1'];
                }
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
    // }

    ?>
</body>
</html>