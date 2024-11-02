<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan bulan dengan switch</title>
</head>
<body>
    <h3>Menentukan Bulan Dengan Switch</h3>
    <form action="" method="post">
        Pilih : <select name="bulanz">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <?php

    if (!empty($_POST)) {
        $bulan = $_POST["bulanz"];
        switch ($bulan) {
            case 1:
                echo "Ini Bulan Januari";
                break;
            case 2:
                echo "Ini Bulan Februari";
                break;
            case 3:
                echo "Ini Bulan Maret";
                break;
            case 4:
                echo "Ini Bulan April";
                break;
            case 5:
                echo "Ini Bulan Mei";
                break;
            case 6:
                echo "Ini Bulan Juni";
                break;
            case 7:
                echo "Ini Bulan Juli";
                break;
            case 8:
                echo "Ini Bulan Agustus";
                break;
            case 9:
                echo "Ini Bulan September";
                break;
            case 10:
                echo "Ini Bulan Oktober";
                break;
            case 11:
                echo "Ini Bulan November";
                break;
            case 12:
                echo "Ini Bulan Desember";
                break;
            
            default:
                echo "Maaf Anda Bukan Orang Bumi😭😭";
                break;
        }
    }

    ?>
</body>
</html>