<?php
for ($i = 1; $i <= 9; $i += 2) {

    $jInicial = $i + 6;

    for ($j = $jInicial; $j >= $jInicial - 2; $j--) {
        echo "I=$i J=$j\n";
    }
}
?>