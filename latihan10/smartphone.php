<?php
class Smartphone {
    // Variable private
    private $menyala = false;

    // Metode publik
    public function tombolMenyalakan() {
        $this->menyala = true;
    }

    public function tombolMatikan() {
        $this->menyala = false;
    }

    public function cetakStatus() {
        echo ($this->menyala ? "Smartphone telah menyala" : "Smartphone mati")."\n";
    }
}

// Membuat objek Smartphone
$check = new Smartphone();

// Mengakses metode
$check->cetakStatus();
echo "<br>";
$check->tombolMenyalakan();
$check->cetakStatus();
echo "<br>";
$check->tombolMatikan();
$check->cetakStatus();
?>