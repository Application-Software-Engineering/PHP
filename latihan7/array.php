<?php
// Create array

# Expression
# $arr = array("budiono", "jonathan", "hansen");
# $arr = ["budiono", "jonathan", "hansen"];

# Indexed array (Index Numerik)
$arr = array("budiono", "jonathan", "hansen");
echo $arr[2]."<br>";

$arr = [];
$arr = ["fahad", "rafi", "bayu"];

# Associative array (Index Name)
$mobil = array(
    "brand" => "Toyota",
    "model" => "Agya",
    "year" => "2022",
);
echo $mobil["brand"]."<br>";

$myArr = [];
$myArr[0] = "apel";
$myArr[1] = "jambu";
$myArr[2] = "pisang";

var_dump($myArr);

echo "<br>";
# Function on array

function myFunc() {
    echo "Saya MHS ASE";
}
echo "<br>";


$myArr = array(
    "motor" => "PCX",
    "age" => 18,
    "message" => "myFunc",
);

echo $myArr["message"]();
echo "<br>";




// Multidimension array
$buah = ["pisang", "mangga", "apel"];
array_push($buah, ["semangka", "nanas", "jeruk"], "nangka", "durian");

print_r($buah);
?>