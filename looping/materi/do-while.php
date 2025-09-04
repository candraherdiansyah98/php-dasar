<?php
$i = 1;
do {
    $i++;
    if ($i % 2 == 1) {
        echo "Nomor: $i Nilai Ganjil<br>";
    } else {
        echo "Nomor: $i Nilai Genap<br>";
    }
} while ($i <= 10);
