<?php 

$database_list = ["Apel", "Pisang", "Jeruk"];

function display_db() {
    global $database_list;
    if (is_array($database_list) && !empty($database_list)) {
        echo "<ul>";
        foreach ($database_list as $items) {
            echo "<li>". htmlspecialchars($items) ."</li>";
        }
        echo "</ul>";
    } else {
        echo "Daftar Kosong";
    }
}

function addItem($item) {
    global $database_list;
    $item = trim($item);
    array_push($database_list, $item);        
}

function deleteItem($item) {
    global $database_list;
    $index = array_search($item, $database_list, true);
    if ($index !== false) {
        unset($database_list[$index]);
        array_values($database_list);
    }
}

if (!empty($_POST)) {
    if (!empty($_POST["new_item"])) {
        addItem($_POST["new_item"]);
    }
    if (!empty($_POST["delete_item"])) {
        deleteItem($_POST["delete_item"]);
    }
} else {
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
</head>
<body>
    <h1>Daftar Belanja</h1>
    <?php display_db() ?>

    <h2>Tambah Item</h2>
    <form method="post">
        <input type="text" name="new_item" placeholder="Tambah item baru" required>
        <input type="submit" value="Tambah">
    </form>

    <h2>Hapus Item</h2>
    <form method="post">
        <input type="text" name="delete_item" placeholder="Tambah item baru" required>
        <input type="submit" value="Hapus">
    </form>
</body>
</html>