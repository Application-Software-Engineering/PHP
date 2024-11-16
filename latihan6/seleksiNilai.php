<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Nilai</title>
</head>
<body>
    <h1>Seleksi Nilai</h1>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="Masukan Nama"><br>
        <input type="text" name="mtk" placeholder="Masukan Nilai Matematika"><br>
        <input type="text" name="inggris" placeholder="Masukan Nilai Bahasa Inggris"><br>
        <input type="text" name="b-indo" placeholder="Masukan Nilai Bahasa Indonesia"><br>
        <input type="text" name="ppkn" placeholder="Masukan Nilai Kewarganegaraan"><br>
        <button type="submit">Submit</button><br>
    </form>
    <?php
    #
    #
    #
    #   AGAK LAEN INI MAH😂😂😂
    #
    #
    #
    #

    if (!empty($_POST["nama"]) && !empty($_POST["mtk"]) && !empty($_POST["inggris"]) && !empty($_POST["b-indo"]) && !empty($_POST["ppkn"])) {
        $nama = $_POST["nama"];
        $nilai_mtk = $_POST["mtk"];
        $nilai_inggris = $_POST["inggris"];
        $nilai_indo = $_POST["b-indo"];
        $nilai_ppkn = $_POST["ppkn"];
        $tampung_lulus = "";
        $tampung_hasil = "";

        function tampilkan($person, $mtk, $inggris, $indo, $ppkn, $average, $totalnyo, $grade, $lulusKah) {
            echo "<h4>Nama Kamu : $person</h4>
                    <p>Nilai Matematika : $mtk</p>
                    <p>Nilai Bahasa Inggris : $inggris</p>
                    <p>Nilai Bahasa Indonesia : $indo</p>
                    <p>Nilai Kewarganegaraan : $ppkn</p>
                    <br>
                    <p>Rata-Rata Nilai : $average</p>
                    <p>Total Nilai : $totalnyo</p>
                    <p>Grade : $grade</p>
                    <h4>Dinyatakan : KAMU $lulusKah UNTUK TEST BERIKUTNYA.</h4>";
        }

        function rata_rataNilai($val1, $val2, $val3, $val4) {
            $total = $val1+$val2+$val3+$val4;
            return $total/4;
        }
        function totalNilai($val1, $val2, $val3, $val4) {
            return $val1+$val2+$val3+$val4;
        }
        

        $rata_rata = rata_rataNilai($nilai_mtk, $nilai_inggris, $nilai_indo, $nilai_ppkn);
        $total = totalNilai($nilai_mtk, $nilai_inggris, $nilai_indo, $nilai_ppkn);


        if ($rata_rata > 88 && $rata_rata < 100) {
            $tampung_lulus = "A";
        } elseif ($rata_rata > 75) {
            $tampung_lulus = "B";
        } elseif ($rata_rata > 60) {
            $tampung_lulus = "C";
        } elseif ($rata_rata > 50) {
            $tampung_lulus = "D";
        } elseif ($rata_rata > 30) {
            $tampung_lulus = "E";
        } elseif ($rata_rata > 0) {
            $tampung_lulus = "F";
        } else {
            echo "Tidak Valid!";
        }
        

        if ($tampung_lulus == "A" || $tampung_lulus == "B" || $tampung_lulus == "C") {
            $tampung_hasil = "LULUS";
        } else {
            $tampung_hasil = "TIDAK LULUS";
        }
        
        tampilkan($nama, $nilai_mtk, $nilai_inggris, $nilai_indo, $nilai_ppkn, $rata_rata, $total, $tampung_lulus, $tampung_hasil);
        
    } else {
        echo "Mohon masukan inputan yang lengkap!";
    }
    ?>
</body>
</html>