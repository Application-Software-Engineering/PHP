<?php 

function insertionSort($array) {
    $lenght = count($array);

    for ($i= 1; $i < $lenght; $i++) { 
        $key = $array[$i];
        $j = $i + 1;

        // Pindahkan elemen array[0..i-1] yang lebih besar dari key ke satu posisi di depan posisi saat ini
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

$data = [64, 34, 25, 12, 22, 11, 90];
$sortedData =  insertionSort($data);
print_r($sortedData);
?>