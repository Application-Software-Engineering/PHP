<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan hari dengan switch</title>
</head>
<body>
    <h3>Menentukan hari dengan switch</h3>
    <form action="" method="post">
    Pilih angka : <select name="hari">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    <br>
    <button type="submit">Submit</button>
    </form>
    <br>
    <?php
    if (!empty($_POST)) {
        
    $hari = $_POST['hari'];

    switch ($hari) {
        case 1:
            echo "Ini Hari Senin";
            break;
        case 2:
            echo "Ini Hari Selasa";
            break;
        case 3:
            echo "Ini Hari Rabu";
            break;
        case 4:
            echo "Ini Hari Kamis";
            break;
        case 5:
            echo "Ini Hari Jumat";
            break;
        case 6:
            echo "Ini Hari Sabtu";
            break;
        case 7:
            echo "Ini Hari Minggu";
            break;
        
        default:
            echo "Maaf Inputan Tidak Dikenal";
            break;
    }
}

    ?>
</body>
</html>