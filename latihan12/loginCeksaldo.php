<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Bank ASE</title>
</head>
<body>
    <?php 
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
        public function tambahNominal($jumlah) {
            return $this->nominal += $jumlah;
        }
        public function kurangiNominal($jumlah) {
            return $this->nominal -= $jumlah;
        }
    }

    # Definisikan kelas untuk mengelola koleksi data nominal
    class koleksiNominal {
        private $data = [];

        public function tambahDataMaster($DataMaster) {
            $this->data[] = $DataMaster;
        }

        public function cariPengguna($nama, $noRekening) {
            foreach ($this->data as $DataMaster) {
                if ($DataMaster->getNama() === $nama && $DataMaster->getnoRekening() === $noRekening) {
                    return $DataMaster;
                }
            }
            return null;
        }
    }

    #Membuat instalasi objek dari kelas KoleksiNominal
    $koleksi = new KoleksiNominal();

    #Menambahkan data ke dalam koleksi
    $koleksi->tambahDataMaster(new DataMaster("Ahmad", 100000, "123456"));
    $koleksi->tambahDataMaster(new DataMaster("Budi", 200000, "567899"));
    $koleksi->tambahDataMaster(new DataMaster("Citra", 150000, "910101"));
    $koleksi->tambahDataMaster(new DataMaster("Dewi", 300000, "112121"));
    $koleksi->tambahDataMaster(new DataMaster("Eka", 250000, "314141"));
    $koleksi->tambahDataMaster(new DataMaster("Fajar", 350000, "516161"));
    $koleksi->tambahDataMaster(new DataMaster("Gita", 400000, "718181"));
    $koleksi->tambahDataMaster(new DataMaster("Hadi", 450000, "920101"));
    $koleksi->tambahDataMaster(new DataMaster("Irma", 500000, "122323"));
    $koleksi->tambahDataMaster(new DataMaster("Joko", 550000, "324343"));
    
    #Mendapatkan input dari form
    if (!empty($_POST['nama']) && !empty($_POST['noRekening'])) {
        $namaDicari = $_POST['nama'];
        $noRekeningDicari = $_POST['noRekening'];
        $pengguna = $koleksi->cariPengguna($namaDicari, $noRekeningDicari);

        if ($pengguna !== null) {
            echo "<h3>Selamat datang ". $pengguna->getNama(). " di Mesin ATM kami</h3>";
            ?>
            <table width="60%" border="0">
            <form action="" method="post">
                <tr>
                    <td width="40%">
                        <label for="menu">Pilih Menu</label>
                    </td>
                    <td width="60%">
                        :<select name="menu" id="menu">
                            <option value="cek_nominal">Cek Nominal</option>
                            <option value="ambil_uang">Ambil Saldo</option>
                            <option value="tambah_uang">Tambah Saldo</option>
                        </select>
                        <input type="hidden" name="nama" value="<?php echo $pengguna->getNama(); ?>">
                        <input type="hidden" name="noRekening" value="<?php echo $pengguna->getnoRekening(); ?>">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </form>
            <?php 
            if (isset($_POST['menu']) && $_POST['menu'] == 'cek_nominal') {
            ?>
            <tr>
                <td colspan="2">
                    <h3>Nominal anda: Rp <?php echo $pengguna->getNominal();?></h3>
                </td>
            </tr>
            <?php
            } else if (isset($_POST['menu']) && $_POST['menu'] == 'ambil_uang') {
                if (isset($_POST['jumlah'])) {
                    $jumlah = (int)$_POST['jumlah'];
                    $pecahan = (int)$_POST['pecahan'];
                    $nominal = $pengguna->getNominal();
                    $cihui = number_format($jumlah,0,',','.');
                    $cihuy = number_format($nominal,0,',','.');
                    
                    if ($jumlah <= $nominal) {
                        $pengguna->kurangiNominal($jumlah);
                        echo "<tr>
                                <td colspan='2'>
                                    <p><b>Anda Mengambil Rp $cihui</b><br>
                                    Nominal Saldo tersisa: Rp ".$cihuy."</p>
                                </td>
                            </tr>";
                    } else {
                        echo "<tr>
                                <td colspan='2'><h3>Nominal yang diminta lebih besar dari saldo anda</h3></td>
                            </tr>";
                    }
                } else {
                    ?>
                    <form action="" method="post">
                        <tr>
                            <td width="40%">
                            </td>
                            <td width="60%">
                              :<input type="number" name="jumlah" id="jumlah" placeholder="jumlah penarikan" required>
                              <select name="pecahan" id="pecahan">
                                <option value="50000">Rp50.000</option>
                                <option value="100000">Rp100.000</option>
                              </select>
                              <input type="hidden" name="nama" value="<?php echo $pengguna->getNama(); ?>">
                              <input type="hidden" name="noRekening" value="<?php echo $pengguna->getnoRekening(); ?>">
                              <input type="hidden" name="menu" value="ambil_uang">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td align="left">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </form>
                </table>
                <?php
                }
            }
        } else {
            echo "<h3>Nama atau Nomor Rekening salah, <a href='loginCeksaldo.php'><button>Login Lagi</button></a></h3>";
        }    
    } else {
        ?>
        <h2>Form Login</h2>

        <form action="" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama"><br><br>
            <label for="noRekening">Nomor Rekening:</label><br>
            <input type="password" name="noRekening" id="noRekening"><br><br>
            <input type="submit" value="submit">
        </form>
        <?php 
    }
?>
    
   
</body>
</html>