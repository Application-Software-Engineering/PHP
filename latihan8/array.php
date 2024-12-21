<?php

$mhs = [
    "Hansen",
    "Steven",
    "John",
    "Lucas",
    "Rukawa",
    "Levi",
    "Yeager",
    "Kruger",
    "Mikasa",
    "Armin"
];

echo "<h1>MHS</h1>";
foreach ($mhs as $key => $value) {
    $key = $key+1;
    echo 'Nama '. $key .' = '. $value.'<br>';
}

$mhsBaru = ["Erwin", "Hange"];
$fusion = array_merge($mhs, $mhsBaru);

echo "<h1>MHS Fusion</h1>";
foreach ($fusion as $key => $value) {
    $key = $key+1;
    echo 'Nama '. $key .' = '. $value.'<br>';
}


echo "<h1>Array Search</h1>";
$index = array_search('levi', $fusion);
if ($index) {
    echo 'Found at list = '.$index+1;
} else {
    echo 'Not Found';    
}

echo "<h1>Array Unique</h1>";
$mhsBaru2 = ["Erwin", "Hange", "Hange", "Floch"];
$fusion2 = array_merge($mhs, $mhsBaru2);
$fusion2 = array_unique($fusion2);
echo "<h3>MHS Fusion2</h3>";
foreach ($fusion2 as $key => $value) {
    $key = $key+1;
    echo 'Nama '. $key .' = '. $value.'<br>';
}

echo "<h1>Array Sorting</h1>";
echo "<h3>MHS Fusion2 Descending</h3>";
arsort($fusion2);
foreach ($fusion2 as $key => $value) {
    $key = $key+1;
    echo 'Nama '. $key .' = '. $value.'<br>';
}

echo "<h3>MHS Fusion2 Ascending</h3>";
asort($fusion2);
foreach ($fusion2 as $key => $value) {
    $key = $key+1;
    echo 'Nama '. $key .' = '. $value.'<br>';
}

echo "<h1>Count Array</h1>";
echo "Jumlah data mahasiswa = ".count($fusion2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        <tr>
            <?php foreach ($fusion2 as $key => $value):?>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>