<?php
for ($i = 0; $i <= 2; $i += 0.2) {
    for ($j = 1; $j <= 3; $j++) {
        $valorJ = $j + $i;
        echo "I=" . number_format($i, 1, '.', '') . " J=" . number_format($valorJ, 1, '.', '') . "\n";
    }
}
?>
