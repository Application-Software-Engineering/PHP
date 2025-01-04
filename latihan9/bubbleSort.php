<?php 

function bubbleSort($array) {
    $lenght = count($array);

    for ($i = 0; $i < $lenght - 1; $i++) {
        for ($j = 0; $j < $lenght - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Tukar elemen
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Contoh penggunaan
$data = [64, 34, 25, 12, 22, 11, 90];
$sortedData =  bubbleSort($data);
print_r($sortedData);
?>