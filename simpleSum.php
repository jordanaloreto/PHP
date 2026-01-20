<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas inteiros.\n";
    }
}

function somar($A, $B){
    return $A + $B;
}

$A = lerNumero("A?");
$B = lerNumero("B?");

$resultado = somar($A, $B);

echo "Soma = $resultado";
?>
