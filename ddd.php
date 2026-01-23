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

function dddDestinacao($A){
// array associativo
    $ddds = [
        61 => 'Brasilia',
        71 => 'Salvador',
        11 => 'Sao Paulo',
        21 => 'Rio de Janeiro',
        32 => 'Juiz de Fora',
        19 => 'Campinas',
        27 => 'Vitoria',
        31 => 'Belo Horizonte'
    ];

    if (array_key_exists($A, $ddds)) {
        echo $ddds[$A] . "\n";
    } else {
        echo "DDD nao cadastrado\n";
    }
}

$A = lerNumero('DDD? ');

dddDestinacao($A);
?>