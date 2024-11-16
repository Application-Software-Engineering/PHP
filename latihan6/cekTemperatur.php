<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Temperatur</title>
</head>
<body>
    <h1>Cek Temperatur Suhu</h1>
    <form action="" method="post">
        <input type="text" name="suhu" placeholder="Masukan suhu">
        <button type="submit">Submit</button>
    </form>
    <?php

    if (!empty($_POST["suhu"])) {
        $suhu = $_POST["suhu"];
        if ($suhu > 60 && $suhu <= 100) {
            echo "Udara Sedang Tidak Normal.";
        } elseif ($suhu > 40 && $suhu <= 100) {
            echo "Udara Sedang Panas";
        } elseif ($suhu > 28 && $suhu <= 100) {
            echo "Udara Sedang Hangat.";
        } elseif ($suhu > 16 && $suhu <= 100) {
            echo "Udara Sedang Sejuk.";
        } elseif ($suhu >= 10 && $suhu <= 100) {
            echo "Udara Sedang Dingin.";
        } elseif ($suhu < 10 && $suhu <= 100) {
            echo "Udara Sedang Beku.";
        } else {
            echo "Sangat Tidak Normal!";
        }
    }
    ?>
</body>
</html>