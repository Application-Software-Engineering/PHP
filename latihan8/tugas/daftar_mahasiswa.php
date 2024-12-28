<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="count-box">
        <?php echo countData($mhs, $mhsBaru, $mhsBaru2, $fusion, $fusion2); ?>
    </div>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php echo displayTable($mhs, $mhsBaru, $mhsBaru2, $fusion, $fusion2); ?>
    </table>
    <form method="get">
        <div class="button">
            <button type="submit" name="table" value="fusion">Mahasiswa Gabungan</button>
            <button type="submit" name="table" value="intern">Mahasiswa Intern</button>
            <button type="submit" name="table" value="master">Mahasiswa</button>
            <button type="submit" name="table" value="merge">Merge</button>
            <button type="submit" name="table" value="unique">Unique</button>
        </div>
    </form>
    <footer class="footer"><p>&copy; github.com/Application-Software-Engineering</p></footer>
</body>
</html>