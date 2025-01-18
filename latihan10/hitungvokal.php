<?php
// Tanpa abstrak method 
function hitungVokal($kata){
    // Daftar huruf vokal
    $vokal = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O'];
    $jumlahVokal = 0;

    // Hitung jumlah huruf vokal dalam kata
    for ($i=0; $i < strlen($kata); $i++) { 
        if (in_array($kata[$i], $vokal)) {
            $jumlahVokal++;
        }
    }
    return $jumlahVokal;
}

// Contoh penggunaan
$kata = "Halo Dunia";
echo "Jumlah huruf vokal dalam '$kata' adalah : ".hitungVokal($kata);
?>