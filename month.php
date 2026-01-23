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

function meses($A){
// array associativo
    $mes = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro',
    ];

    if (array_key_exists($A, $mes)) {
        echo $mes[$A] . "\n";
    } else {
        echo "Essemes nao existe\n";
    }
}

$A = lerNumero('Mes? ');

meses($A);
?>