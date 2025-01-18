<?php
// Kelas abstrak
class PenghitungVokal {
    public function hitungVokal($kata) {
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
}

// Contoh penggunaan
$kata = "Halo Dunia";
$penghitung = new PenghitungVokal();
echo "Jumlah huruf vokal dalam '$kata' adalah : ".$penghitung->hitungVokal($kata); // Output : 5
?>