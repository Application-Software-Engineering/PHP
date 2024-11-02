<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>
    <h3>Operator AND / &&</h3>
    <p>Hasilnya akan TRUE jika keduanya Benar</p>

    <?php
        $x = 100;
        $y = 50;

        if ($x == 100 && $y == 50) {
            echo "Benar";
        }
    ?>
    <h3>Operator OR / ||</h3>
    <p>Hasilnya akan TRUE jika salah satunya benar / keduanya Benar</p>

    <?php
        $x = 100;
        $y = 150;

        if ($x == 100 || $y == 50) {
            echo "TRUE : Benar / salah satunya benar";
        } else {
            echo "FALSE : Keduanya salah";
        }
    ?>
    <h3>Operator XOR</h3>
    <p>Hasilnya akan TRUE jika salah satunya benar / tapi tidak keduanya Benar</p>

    <?php
        $x = 100;
        $y = 150;

        if ($x == 100 XOR $y == 50) {
            echo "TRUE : Benar salah satunya benar";
        } else {
            echo "FALSE : Keduanya benar";
        }
    ?>
    <h3>Operator NOT / !</h3>
    <p>Memanipulasi dari aslinya true menjadi false</p>

    <?php
        $x = 100;
        $y = 150;

        if (!($x == 100)) {
            echo "TRUE : x adalah 100";
        } else {
            echo "FALSE : x bukan 100";
        }
    ?>
</body>
</html>