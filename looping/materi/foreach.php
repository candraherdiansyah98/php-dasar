<?php
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"]; // index , value

// foreach ($buah as $b) {
//     echo "Buah: $b <br>";
// }

for ($i = 0; $i < count($buah); $i++) {
    echo "Buah: " . $buah[$i] . "<br>";
}
