<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Bank Void</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'atm_data.php';

if (!empty($_POST['nama']) && !empty($_POST['noRekening'])) {
    $namaDicari = $_POST['nama'];
    $rekeningDicari = $_POST['noRekening'];
    $user = $data->cariPengguna($namaDicari, $rekeningDicari);
    
    if ($user !== null) {
        echo "<h2>Halo ". $user->getNama()." Selamat datang di ATM Bank Void </h2>"
        ?>
        <table width="60%" border="0">
            <tr>
            <td width="20%">Pilih Menu</td>
            <td width="60%">
            <form action="" method="post">
            :<select name="menu" id="menu">
                <option value="cek_saldo">Cek Saldo</option>
                <option value="tarik_tunai">Tarik Tunai</option>
                <option value="setor_tunai">Setor Tunai</option>
            </select>
            <input type="hidden" name="nama" value="<?php echo $user->getNama(); ?>">
            <input type="hidden" name="noRekening" value="<?php echo $user->getNoRekening(); ?>">
            <input type="submit" value="Submit">
            </form>
            </td>
            </tr>
    <?php
    if (isset($_POST["menu"]) && $_POST["menu"] == "cek_saldo") {
        echo "<tr>
                <td colspan='2'>
                <h2>Saldo anda : Rp. ".number_format($user->getSaldo(), 0,",",".")."</h2>
                </td>
                </tr>";
    } else if (isset($_POST["menu"]) && $_POST["menu"] == "tarik_tunai") {
        ?>
        <tr>
            <td></td>
            <td>
            <form action="" method="post">
            &nbsp;<input type="number" name="jumlah" id="jumlah" placeholder="Masukan nominal penarikan">
            </td>
        </tr>
        <tr>
            <td width="20%">Pilih Pecahan</td>
            <td>
            :<select name="pecahan" id="pecahan">
                <option value="100000">Rp. 100.000</option>
                <option value="50000">Rp. 50.000</option>
                <option value="20000">Rp. 20.000</option>
            </select>
            <input type="hidden" name="nama" value="<?php echo $user->getNama(); ?>">
            <input type="hidden" name="noRekening" value="<?php echo $user->getNoRekening(); ?>">
            <input type="hidden" name="menu" value="tarik_tunai">
            </td>
        </tr>
        <tr>
            <td width="20%">
            </td>
            <td>
                &nbsp;<input type="submit" value="Submit">
            </td>
        </tr>
        </form>
        <?php
        if (!empty($_POST["jumlah"])) {
            $jumlah = $_POST["jumlah"];
            $pecahan = $_POST["pecahan"];
            $saldo = $user->getSaldo();
            
            if ($jumlah > $saldo) {
                echo "<tr>
                        <td colspan='2'>
                        <h2>Nominal lebih besar dari saldo anda!</h2>
                        </td>
                        </tr>";
            } else if ($jumlah % $pecahan !=0) {
                echo "<tr>
                        <td colspan='2'>
                        <h2>Nominal tidak sesuai dengan pecahan!</h2>
                        </td>
                        </tr>";
            } else {
                $user->kurangiSaldo($jumlah);
                $lembar = intdiv($jumlah, $pecahan);
                $format_jml = number_format($jumlah,0,",",".");
                $format_pch = number_format($pecahan,0,",",".");
                $format_sld = number_format($user->getSaldo(),0,",",".");
                echo "<tr>
                        <td colspan='2'>
                        <p><b>Berhasil melakukan penarikan sebesar : Rp. $format_jml</b><br>
                        Jumlah Lembaran : $lembar x Rp. $format_pch<br>
                        Sisa saldo anda : Rp $format_sld
                    </p>
                    </td>
                    </tr>";
            }
        }
        ?>

        
        <?php
    } else if (isset($_POST["menu"]) && $_POST["menu"] == "setor_tunai") {
        ?>
        <tr>
            <td></td>
            <td>
            <form action="" method="post">
            &nbsp;<input type="number" name="jumlah" id="jumlah" placeholder="Masukan nominal setor">
            </td>
        </tr>
        <tr>
            <td width="20%">Pilih Pecahan</td>
            <td>
            :<select name="pecahan" id="pecahan">
                <option value="100000">Rp. 100.000</option>
                <option value="50000">Rp. 50.000</option>
                <option value="20000">Rp. 20.000</option>
            </select>
            <input type="hidden" name="nama" value="<?php echo $user->getNama(); ?>">
            <input type="hidden" name="noRekening" value="<?php echo $user->getNoRekening(); ?>">
            <input type="hidden" name="menu" value="setor_tunai">
            </td>
        </tr>
        <tr>
            <td width="20%">
            </td>
            <td>
                &nbsp;<input type="submit" value="Submit">
            </td>
        </tr>
        </form>
        </table>
        <?php
        if (!empty($_POST["jumlah"])) {
            $jumlah = $_POST["jumlah"];
            $pecahan = $_POST["pecahan"];
            
            if ($jumlah % $pecahan !=0) {
                echo "<tr>
                        <td colspan='2'>
                        <h2>Nominal tidak sesuai dengan pecahan!</h2>
                        </td>
                        </tr>";
            } else {
                $user->tambahSaldo($jumlah);
                $lembar = intdiv($jumlah, $pecahan);
                $format_jml = number_format($jumlah,0,",",".");
                $format_pch = number_format($pecahan,0,",",".");
                $format_sld = number_format($user->getSaldo(),0,",",".");
                echo "<tr>
                        <td colspan='2'>
                        <p><b>Berhasil melakukan setor sebesar : Rp. $format_jml</b><br>
                        Jumlah Lembaran : $lembar x Rp. $format_pch<br>
                        Sisa saldo anda : Rp $format_sld
                    </p>
                    </td>
                    </tr>";
            }
        }
    }
    } else {
        echo "<h1>Login gagal!, silahkan coba lagi </h1><button><a href='program_ui.php'>Login</a></button>";        
    }

} else {
?>
    <h2>Login ATM Bank Void</h2>
    <form action="" method="post">
        <label for="nama">Masukkan Nama :</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="noRekening">Masukkan No Rekening :</label><br>
        <input type="password" name="noRekening" id="noRekening" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
</body>
</html>