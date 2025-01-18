<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pinjaman Buku</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br><label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required>
        <br>
        <input type="submit" value="Pinjam Buku">
    </form>
</body>
<?php
include 'peminjamanProses.php';
?>
</html>