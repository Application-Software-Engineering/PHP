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
    Nama Depan : <input type="text" name="firstName"><br>
    Nama Belakang : <input type="text" name="lastName"><br>
    Nama Kelas : <input type="text" name="className"><br>
    <button type="submit">Button</button>
    </form>
    <?php
        if (!empty($_POST)) {
            echo "Nama kamu adalah : <br>";
            echo "<b>".$_POST["firstName"]."</b> ";
            echo "<b>".$_POST["lastName"]."</b> <br>";
            echo "Kamu berada di kelas : <br>";
            echo "<b>".$_POST["className"]."</b>";
        }
    ?>
</body>
</html>