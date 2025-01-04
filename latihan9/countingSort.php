<?php

function countingSort($array){
    // Mencari nilai maksimum pada array
    $maxValue = max($array);

    // Membuat array penghitung dengan ukuran sesuai nilai maksimum + 1
    $count = array_fill(0, $maxValue + 1,0);

    // Menghitung frekuensi kemunculan setiap elemen pada array asli
    foreach ($array as $value) {
        $count[$value]++;
    }


    // Menghasilkan array yang terurut
    $sortedArray = [];
    foreach ($count as $value => $frequency) {
        for ($i=0; $i < $frequency; $i++) { 
            $sortedArray[] = $value;
        }
    }
    return $sortedArray;
}

// Contoh penggunaan
$array = [4, 2, 2, 8, 3, 3, 1];
echo "Array asli : ";
print_r($array);

echo "<br>";

$sortedArray = countingSort($array);
echo "Array setelah diurutkan : ";
print_r($sortedArray);
?>