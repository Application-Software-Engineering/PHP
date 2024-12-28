<?php
$mhs = [
    "Hansen",
    "Steven",
    "John",
    "Lucas",
    "Rukawa",
    "Levi",
    "Yeager",
    "Kruger",
    "Mikasa",
    "Armin"
];

# mhsGabungan
$mhsBaru = ["Erwin", "Historia"];
$fusion = array_merge($mhs, $mhsBaru);

# mhsUnique
$mhsBaru2 = ["Zeke", "Hange", "Hange", "Floch"];
$fusion2 = array_merge($mhs, $mhsBaru2);
$fusion2 = array_unique($fusion2);

# mengurutkan data secara ascending A-Z (reset indeks)
sort($mhs);         # master
sort($mhsBaru);     # gabungan
sort($mhsBaru2);    # intern
sort($fusion);      # merge

# counting
function countData($mhs, $mhsBaru, $mhsBaru2, $fusion, $fusion2){
    if (!empty($_GET['table'])) {
        $tabel = $_GET['table'];
        if ($tabel == "fusion") {
            echo "<p>Total Mahasigma : ".count($mhsBaru)."</p>";
        } elseif ($tabel == "intern") {
            echo "<p>Total Mahasigma : ".count($mhsBaru2)."</p>";
        } elseif ($tabel == "master") {
            echo "<p>Total Mahasigma : ".count($mhs)."</p>";
        } elseif ($tabel == "merge") {
            echo "<p>Total Mahasigma : ".count($fusion)."</p>";
        } elseif ($tabel == "unique") {
            echo "<p>Total Mahasigma : ".count($fusion2)."</p>";
        }
        
    } else {
        echo "<p>Total Mahasigma : ".count($mhs)."</p>";
    }
}

# display table
function displayData($mhs){
    foreach ($mhs as $key => $value) {
        $key = $key+1;
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
    }
}

function displayTable($mhs, $mhsBaru, $mhsBaru2, $fusion, $fusion2){
    if (!empty($_GET['table'])) {
        $tabel = $_GET['table'];
        if ($tabel == "fusion") {
            echo displayData($mhsBaru);
        } elseif ($tabel == "intern") {
            echo displayData($mhsBaru2);
        } elseif ($tabel == "master") {
            echo displayData($mhs);
        } elseif ($tabel == "merge") {
            echo displayData($fusion);
        } elseif ($tabel == "unique") {
            echo displayData($fusion2);
        }
        
    } else {
        echo displayData($mhs);
    }
}

?>