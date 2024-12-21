<?php

$db_file = "database.json"; // Menyimpan array di JSON

if (!file_exists($db_file)) {                      # Mengecek keberadaan file, jika filenya tidak ada maka
    file_put_contents($db_file, json_encode([]));  # Buatkan filenya dengan func file_put_contents
}                                                  # Valuenya bracket [], yang di encode dengan func json_encode

$list_item = json_decode(file_get_contents($db_file), true); # Ambil data dari file json, menggunakan func json_decode dan file_get_contents

function display_db() {
    global $list_item;
    if (is_array($list_item) && !empty($list_item)) {
        echo "<ul>";
        foreach ($list_item as $items) {
            echo "<li>". htmlspecialchars($items) ."</li>";
        }
        echo "</ul>";
    } else {
        echo "Daftar Kosong";
    }
}

function addItem($item) {
    global $list_item, $db_file;
    $item = trim($item);                                        # Rapikan inputan menggunakan func trim (menghapus spasi diawal dan akhir)
    if (!empty($item) && !in_array($item, $list_item)) {        # Jika item (inputan) tidak kosong dan tidak berada dalam array list_item
        $list_item[] = $item;                                   # Maka tambahkan item kedalam array list_item
        file_put_contents($db_file, json_encode($list_item));   # Kemudian simpan kedalam file json dengan func file_put_contents dan json_encode
    }
}

function deleteItem($item) {
    global $list_item, $db_file;
    $index = array_search($item, $list_item, true);             # Cari inputan dari user pada array list_item dengan func array_search
    if ($index !== false) {                                     # Jika index tidak sama dengan/tidak identik dengan false maka:
        unset($list_item[$index]);                              # Hapus item dari array menggunakann func unset
        $list_item = array_values($list_item);                  # Kemudian reset indeks array
        file_put_contents($db_file, json_encode($list_item));   # Lalu simpan kedalam file json dengan func file_put_contents dan json_encode
    }
}

if (!empty($_POST)) {
    if (!empty($_POST["new_item"])) {
        addItem($_POST["new_item"]);
    }
    if (!empty($_POST["delete_item"])) {
        deleteItem($_POST["delete_item"]);
    } 
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
        <input type="text" name="delete_item" placeholder="Hapus item" required>
        <input type="submit" value="Hapus">
    </form>
</body>
</html>