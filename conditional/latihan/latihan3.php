<?php
$total = 600000;
$disc  = 0;

if ($total >= 500000) {
    $disc = 0.2 * $total;
} elseif ($total >= 250000) {
    $disc = 0.1 * $total;
} else {
    $disc = 0;
}

echo "Total: " . $total . "<br>";
echo "Discount: " . $disc . "<br>";
echo "Total after discount: " . ($total - $disc) . "<br>";
