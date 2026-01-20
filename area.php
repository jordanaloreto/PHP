<?php
$pi = 3.14159;
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

function triangulo($A, $C){
    return ($A * $C) / 2;
}
function retangulo($A, $B){
    return $A * $B;
}
function circulo($pi, $C){
    return $pi * pow($C, 2);
}
function trapezio($A, $B, $C){
    return (($A + $B) * $C) / 2;
}
function quadrado($B){
    return pow($B, 2);
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

$triangulo = triangulo($A, $C);
$retangulo = retangulo($A, $B);
$circulo = circulo($pi, $C);
$trapezio = trapezio($A, $B, $C);
$quadrado = quadrado($B);

echo "Triângulo = $triangulo\n";
echo "Retângulo = $retangulo\n";
echo "Círculo = $circulo\n";
echo "Trapézio = $trapezio\n";
echo "Quadrado = $quadrado\n";
?>