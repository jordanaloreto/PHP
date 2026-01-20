<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas numeros inteiros.\n";
    }
}

function difference($A, $B, $C, $D){
    return ($A * $B) - ($C * $D);
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");
$D = lerNumero("D? ");

$resultado = difference($A, $B, $C, $D);

echo "Diferença = $resultado";
?>
