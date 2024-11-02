<?php

// switch (expresion) {
//     case 'value':
//         # code...
//         break;
//     case 'value2':
//         #code...
//         break;
//     default:
//         # code...
//         break;
// }

$warnaFav = "merah";

switch ($warnaFav) {
    case "merah":
        echo "warna favoritku adalah merah";
        break;
    case "kuning":
        echo "warna favoritku adalah kuning";
        break;
    case "hijau":
        echo "warna favoritku adalah hijau";
        break;
    
    default:
        echo "warna favoritku adalah merah, kuning, hijau";
        break;
}

?>