<?php
// Definsikan kelas untuk menyimpan data nama, nominal, dan sandi
class DataMaster {
    private $nama;
    private $nominal;
    private $noRekening;

    public function __construct($nama, $nominal, $noRekening) {
        $this->nama = $nama;
        $this->nominal = $nominal;
        $this->noRekening = $noRekening;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNominal() {
        return $this->nominal;
    }

    public function getnoRekening() {
        return $this->noRekening;
    }
}

// Definisikan kelas untuk mengelola koleksi data nominal
class KoleksiNominal {
    private $data = [];

    public function tambahDataMaster($DataMaster){
        $this->data[] = $DataMaster;
    }

    public function cariPengguna($nama, $noRekening) {
        foreach ($this->data as $DataMaster) {
            if ($DataMaster->getNama() === $nama && $DataMaster->getNoRekening() === $noRekening) {
                return "Selamat datang ".$nama." di Mesin ATM kami";
            }
        }
        return "Nama atau Nomor Rekening salah";
    }
}

// Membuat instansiasi objek dari kelas KoleksiNominal
$koleksi = new KoleksiNominal();

// Menambahkan data ke dalam koneksi
$koleksi->tambahDataMaster(new DataMaster("Ahmad", 1000000 ,"123456"));
$koleksi->tambahDataMaster(new DataMaster("Aldo", 1500000 ,"112237"));
$koleksi->tambahDataMaster(new DataMaster("Budiono", 100000 ,"223123"));
$koleksi->tambahDataMaster(new DataMaster("Cecep", 1050000 ,"362818"));
$koleksi->tambahDataMaster(new DataMaster("Dendi", 2000000 ,"443234"));
$koleksi->tambahDataMaster(new DataMaster("Fajar", 400000 ,"564321"));
$koleksi->tambahDataMaster(new DataMaster("Ganjar", 100000 ,"666666"));

$namaDicari = "Ganjar";
$noRekeningDicari = "666666";
$hasilPencarian = $koleksi->cariPengguna($namaDicari, $noRekeningDicari);

echo $hasilPencarian;
?>