<?php
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

        echo "Digite apenas numeros inteiros.\n";
    }
}

function converterTempo($A){
    $segundos = $A % 60;
    $A = intdiv($A, 60);

    $minutos = $A % 60;
    $A = intdiv($A, 60);

    $horas = $A;

    return [$horas, $minutos, $segundos];
}

$A = lerNumero("");

list($horas, $minutos, $segundos) = converterTempo($A);

echo "$horas:$minutos:$segundos\n";


?>