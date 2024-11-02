<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>
<body>
    <h1>Input Nama</h1>
    <form action="" method="post">
    Nama : <input type="text" name="Name"><br>
    <button type="submit">Button</button>
    </form>
    <?php
        if (!empty($_POST)) {
            $namaInput = $_POST['Name'];
            $namaMhsExist = 'Fahadz';

            if ($namaInput == $namaMhsExist) {
                echo "Nama kamu ".$_POST['Name'].", kamu adalah Mahasiswa ASE";
            } else {
                echo "Nama kamu ".$_POST['Name'].", kamu bukan Mahasiswa ASE";
            }
            
        }
    ?>
</body>
</html>