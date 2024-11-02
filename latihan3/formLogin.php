<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Silahkan Login</h1>
    <form action="" method="post">
        Username : <input type="text" name="username"><br>
        Password : <input type="text" name="password"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $userInput = $_POST["username"];
        $passInput = $_POST["password"];
        $user = "admin";
        $pass = "admin";

        if ($user == $userInput && $pass == $passInput) {
            echo "Kamu berhasil login";
        } else {
            echo "Gagal login";
        }
        
    }    
    ?>
</body>
</html>