<?php


// if (condition) {
//     // Kondisi jika benar
// }

// if (condition) {
//     # Jika kondisi benar
// } else {
//     # Jika kondisi salah
// }

// if (condition) {
//     # Kondisi kemungkinan 1
// } elseif (condition) {
//     # Kondisi kemungkinan 2
// } elseif (condition) {
//     # Kondisi kemungkinan 3
// } else {
//     # Jika tidak ada yang sesuai
// }

## Latihan IF
$usia = 19;

// if ($usia > 10) {
//     echo "Sudah Dewasa";
// }

if ($usia > 4) {
    echo "Anak-anak";
} else {
    echo "Balita";
}

if ($usia > 30) {
    echo "Orang tua";
} elseif ($usia > 15) {
    echo "Remaja";
} elseif ($usia > 2) {
    echo "Balita";
} else {
    echo "New Born";
}

for ($usia=19; $usia < 10; $usia++) { 
    echo "Anu";
}

?>