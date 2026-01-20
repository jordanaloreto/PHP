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
function positivo($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false && (int)$valor > 0){
            return (int)$valor;
        }

        echo "Digite apenas numeros inteiros positivos.\n";
    }
}

function selection($A, $B, $C, $D){
    if ($A % 2 != 0) {
        echo "Falhou: A nao e par\n";
    } else {
        if ($B <= $C) {
            echo "Falhou: B nao e maior que C\n";
        } else {
            if ($D <= $A) {
                echo "Falhou: D nao e maior que A\n";
            } else {
                if (($C + $D) <= ($A + $B)) {
                    echo "Falhou: C + D nao e maior que A + B\n";
                } else {
                    echo "Valores aceitos\n";
                }
            }
        }
    }
}
// If aninhado
$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = positivo("C? ");
$D = positivo("D? ");

selection($A, $B, $C, $D);


?>