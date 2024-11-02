<?php

// $nilai = 100;

// if ($nilai >= 90 && $nilai <= 100) {
//     echo "Nilai : A";
// } elseif ($nilai >= 85 && $nilai <= 89) {
//     echo "Nilai : B";
// } elseif ($nilai >= 75 && $nilai <= 84) {
//     echo "Nilai : C";
// } elseif ($nilai >= 40 && $nilai <= 74) {
//     echo "Nilai : D";
// } elseif ($nilai >= 0 && $nilai <= 39) {
//     echo "Nilai : E";
// } else {
//     echo "Input Tidak Valid";
// }





if ($_POST['firstName'] >= 90 && $_POST['firstName'] <= 100) {
    echo "Nilai : A";
} elseif ($_POST['firstName'] >= 85 && $_POST['firstName'] <= 89) {
    echo "Nilai : B";
} elseif ($_POST['firstName'] >= 75 && $_POST['firstName'] <= 84) {
    echo "Nilai : C";
} elseif ($_POST['firstName'] >= 40 && $_POST['firstName'] <= 74) {
    echo "Nilai : D";
} elseif ($_POST['firstName'] >= 0 && $_POST['firstName'] <= 39) {
    echo "Nilai : E";
} else {
    echo "Input Tidak Valid";
}



?>