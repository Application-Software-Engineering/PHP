<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Masuk ATM</title>
</head>
<body>
    <h1>Masuk ATM</h1>
    <form action="prosesDashboard.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="sandi">No Rekening:</label><br>
        <input type="password" name="sandi" id="sandi" required><br><br>
        <input type="submit" value="Masuk">
    </form>
</body>
</html>