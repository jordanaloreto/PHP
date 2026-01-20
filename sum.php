<?php
echo "A: ";
$A = trim(fgets(STDIN));

if (!is_numeric($A)) {
    echo "Apenas números\n";
    exit;
}

echo "B: ";
$B = trim(fgets(STDIN));

if (!is_numeric($B)) {
    echo "Apenas números\n";
    exit;
}

function somar($A, $B){
    return $A + $B;
}
$resultado = somar($A, $B);

echo "Soma = $resultado";
?>
<!-- Desse jeito o exit eu vazo d código toda vez que não é numerico -->