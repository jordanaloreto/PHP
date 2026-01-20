<?php
$C = 12;
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite apenas numeros.\n";
    }
}

function fuel($A, $B, $C){
    return ($B / $C) * $A;
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");

$resultado = fuel($A, $B, $C);

echo "R: = " . number_format($resultado, 3, '.', '') . "\n";

?>