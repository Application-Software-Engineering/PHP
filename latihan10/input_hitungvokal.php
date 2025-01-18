<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Vokal</title>
</head>
<body>
    <h1>Penghitung Huruf Vokal</h1>
    <form method="post">
        <label for="kata">Masukkan kata:</label>
        <input type="text" name="kata" id="kata" required>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php 

if (isset($_POST["kata"])) {
    $kata = $_POST["kata"];

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

    $jumlahVokal = hitungVokal($kata);
    echo "Jumlah huruf vokal dalam '$kata' adalah: $jumlahVokal";
}

?>