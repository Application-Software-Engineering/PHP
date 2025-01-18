<?php

function jumlahKarakter($s) {
    if (strlen($s) == 1) {
        return 1;
    } else {
        return 1 + jumlahKarakter(substr($s,1));
    }
}

?>