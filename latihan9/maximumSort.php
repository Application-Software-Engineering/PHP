<?php

function maximumSort($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        $maxIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] > $array[$maxIndex]) {
                $maxIndex = $j;
            }
        }

        $temp = $array[$maxIndex];
        $array[$maxIndex] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}

// Contoh penggunaan
$data = [64, 34, 25, 12, 22, 11, 90];
$sortedData =  maximumSort($data);
print_r($sortedData);
?>