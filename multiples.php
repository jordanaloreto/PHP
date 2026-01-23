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

        echo "Digite apenas numeros.\n";
    }
}

function multiplos($A, $B){
    if ($A == 0 || $B == 0){
        echo "Nao Sao Multiplos\n";
        return;
    }

    if ($A % $B == 0 || $B % $A == 0){
        echo "Sao Multiplos\n";
    } else {
        echo "Nao Sao Multiplos\n";
    }
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");

multiplos($A, $B);
?>