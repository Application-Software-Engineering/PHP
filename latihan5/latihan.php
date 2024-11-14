<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bangun Datar</title>
</head>
<body>
    <h3>Pilih Bangun Datar Favoritmu:</h3>
    <form action="" method="post">
        <select name="typenya">
            <option value="1">Segitiga</option>
            <option value="2">Persegi</option>
            <option value="3">Lingkaran</option>
        </select>
        <button type="submit">Pilih</button>
    </form>

    <?php
    if (!empty($_POST)) {

        function formSegitiga(){
            echo '<form action="" method="post">
        <h3>Segitiga</h3>
        <input type="hidden" name="typenya" value="1">
        <input type="text" name="alas" placeholder="Masukan Alas">
        <input type="text" name="tinggi" placeholder="Masukan Tinggi">
        <button type="submit">Hitung</button>
    </form>';
        }
        function formPersegi(){
            echo '<form action="" method="post">
        <h3>Persegi</h3>    
        <input type="hidden" name="typenya" value="2">
        <input type="text" name="sisi" placeholder="Masukan Sisi">
        <button type="submit">Hitung</button>
    </form>';
        }
        function formLingkaran(){
            echo '<form action="" method="post">
        <h3>Lingkaran</h3>
        <input type="hidden" name="typenya" value="3">
        <input type="text" name="jari-jari" placeholder="Masukan Radius">
        <button type="submit">Hitung</button>
    </form>';
        }

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

       
        switch ($typeBangunDatar) {
            case 1:
                # inputan a, t
                formSegitiga();
                if (!empty($_POST["alas"]) && !empty($_POST["tinggi"])) {
                    $alas = $_POST["alas"];
                    $tinggi = $_POST["tinggi"];
                    $luas = hitungSegitiga($alas, $tinggi);
                    echo "Luas Segitiga: ".$luas;
                }
                break;
            case 2:
                # inputan s
                formPersegi();
                if (!empty($_POST["sisi"])) {
                    $sisi = $_POST["sisi"];
                    $luas = hitungPersegi($sisi);
                    echo "Luas Persegi: ".$luas;
                }
                break;
            case 3:
                # inputan jari-jari
                formLingkaran();
                if (!empty($_POST["jari-jari"])) {
                    $jari = $_POST["jari-jari"];
                    $luas = hitungLingkaran($jari);
                    echo "Luas Lingkaran: ".$luas;
                }
                break;
        }
    }

    ?>
</body>
</html>