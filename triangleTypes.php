<?php

function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (is_numeric($valor)){
            return (float)$valor;
        }

        echo "Digite apenas numeros.\n";
    }
}

function triangleType($A, $B, $C){

    // Ordena em ordem decrescente
    $lados = [$A, $B, $C];
    rsort($lados);
    [$A, $B, $C] = $lados;

    // Não forma triângulo
    if ($A >= ($B + $C)) {
        echo "NAO FORMA TRIANGULO\n";
        return;
    }

    // Tipos de ângulo
    if (pow($A, 2) == pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO RETANGULO\n";
    } elseif (pow($A, 2) > pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO OBTUSANGULO\n";
    } else {
        echo "TRIANGULO ACUTANGULO\n";
    }

    // Tipos de lado
    if ($A == $B && $B == $C) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif ($A == $B || $B == $C || $A == $C) {
        echo "TRIANGULO ISOSCELES\n";
    }
}

// Entrada
$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

triangleType($A, $B, $C);
?>
