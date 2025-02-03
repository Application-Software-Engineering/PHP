<?php
class Atm {
    private $nama;
    private $saldo;
    private $noRekening;

    public function __construct($nama, $saldo, $noRekening) {
        $this->nama = $nama;
        $this->saldo = $saldo;
        $this->noRekening = $noRekening;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getNoRekening() {
        return $this->noRekening;
    }

    public function tambahSaldo($jumlah) {
        return $this->saldo += $jumlah;
    }
    public function kurangiSaldo($jumlah) {
        return $this->saldo -= $jumlah;
    }
}

class KoleksiData {
    private $data = [];

    public function tambahData($Atm) {
        return $this->data[] = $Atm;
    }
    public function cariPengguna($nama, $noRekening) {
        foreach ($this->data as $Atm) {
            if ($Atm->getNama() === $nama && $Atm->getNoRekening() === $noRekening) {
                return $Atm;
            }
        }
        return null;
    }
}

$data = new KoleksiData();
$data->tambahData(new Atm("narumi", 1000000, "112233"));
$data->tambahData(new Atm("rukawa", 800000, "223344"));
$data->tambahData(new Atm("kisaki", 10000000, "334455"));
$data->tambahData(new Atm("tenji", 6000000, "445566"));
$data->tambahData(new Atm("kawarimi", 500000, "556677"));
$data->tambahData(new Atm("takaguri", 30000, "667788"));
$data->tambahData(new Atm("gento", 400000, "778899"));
$data->tambahData(new Atm("rinju", 60000, "889900"));
$data->tambahData(new Atm("mikami", 80000, "998877"));
$data->tambahData(new Atm("nanami", 900000, "009966"));

?>