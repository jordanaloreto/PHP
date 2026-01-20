<?php
while (true){
    echo "A:";
    $A = trim(fgets(STDIN));

    if(is_numeric($A)){
        break;
    }

    echo "Apenas numeros.\n";
}

while (true){
    echo "B:";
    $B = trim(fgets(STDIN));

    if(is_numeric($B)){
        break;
    }

    echo "Apenas numeros.\n";
}

function somar($A, $B){
    return $A + $B;
}
$resultado = somar($A, $B);

echo "Soma = $resultado";
// Desse jeito o exit eu vazo d código toda vez que não é numerico 
?>
