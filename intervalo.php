<?php
$C = 12;
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite apenas numeros.\n";
    }
}

function selection($A){
    if ($A >= 0 && $A <= 25) {
        echo "Intervalo [0,25]\n";
    } else {
        if ($A > 25 && $A <= 50) {
            echo "Intervalo [25,50]\n";
        } else {
            if ($A > 50 && $A <= 75) {
                echo "Intervalo [50,75]\n";
            } else {
                if ($A > 75 && $A <= 100) {
                    echo "Intervalo [75,100]\n";
                } else {
                    echo "Fora do Intervalo\n";
                }
            }
        }
    }
}
// If aninhado
$A = lerNumero("A? ");

selection($A);


?>