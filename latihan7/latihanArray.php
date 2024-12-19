<?php

// Create array
####################################################################################
# Dalam PHP ada dua cara mendefinisikan sebuah array, yaitu seperti berikut:
#
# 1. Menggunakan array()
# 2. Menggunakan [] (bracket)
#
# Dibawah ini akan membuat contoh beberapa array, seperti:
#
# 1. Indexed array (index berdasarkan number)
# 2. Associative array (index dengan penamaan)
# 3. Multidimension array (array didalam array)
#
#####################################################################################


// Indexed array
$arr = array("john", "steven", "stella");
echo $arr[1]."<br>";


// Associative array
$car = array(
    "brand" => "Toyota",
    "model" => "Agya",
    "year" => "2022"
);
echo $car["brand"]."<br>";

// Multidimension array
$fruit = [
    "apel",
    "jeruk",
    "pisang",
    array(
        "nangka",
        "duren",
        "sirsak"
    )
];
var_dump($fruit);
echo "<br>";

######################################################################################

// Function on array
function myFunc(){
    echo "Saya MHS ASE";
}

$myArr = [
    "motor" => "Aerox",
    "age" => 18,
    "message" => "myFunc"
];
echo "<br> Hasil function dalam array : ";
echo $myArr["message"]();
echo "<br>";
echo "<br>";

######################################################################################

// Print value & key (foreach)
$car = array(
    "brand" => "Toyota",
    "model" => "Agya",
    "year" => "2022"
);

// Value & Key
foreach ($car as $key => $value) {
    echo "$key : $value <br>";
}

echo "<br>";

// Value
foreach ($car as $value) {
    echo "$value <br>";
}
echo "<br>";

######################################################################################

// Add item on array

## Indexed
$mhs = ["budiono","slamet","ahmad"];
$mhs[] = "putra";
$mhs[] = "heri";

echo "<br> Index ke 4 dari array mhs adalah ".$mhs[4];

## Associative
$car = array(
    "brand" => "Toyota",
    "model" => "Agya",
    "year" => "2022"
);
$car["warna"] = "Hitam";
echo "<br> Array dengan key warna berisi : ".$car["warna"];

## Multidimension
$fruit = ["pepaya", "pisang", "mangga", "jambu"];
array_push($fruit, ["anggur", "apel"], "alpukat");

echo "<br>";
var_dump($fruit);

echo "<br>";
echo "<br>";
######################################################################################

// Update array unset
$mhs = ["budiono","slamet","ahmad"];
$mhs[2] = "rizki";

foreach ($mhs as &$value) {
    $value = "kenzo";
}
unset($value);
var_dump($mhs);

echo "<br>";

$car = array(
    "brand" => "Toyota",
    "model" => "Agya",
    "year" => "2022"
);
$car["year"] = "2010";
var_dump($car);
?>