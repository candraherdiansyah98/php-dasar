<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

for ($k = 0; $k < 5; $k++) {
    for ($a = 5; $a > $k; $a--) {
        echo "&nbsp;";
    }
    for ($b = 0; $b <= $k; $b++) {
        echo "*";
    }
    echo "<br>";

}
