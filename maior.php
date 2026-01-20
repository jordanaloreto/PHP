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

function maiorAB($A, $B){
    $maiorAB = ($A + $B + abs($A - $B)) / 2;
    return $maiorAB;
}
function maior($maiorAB, $C){
    $maior = ($maiorAB + $C + abs($maiorAB - $C)) / 2;
    return $maior;
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

$resultadoAB = maiorAB($A, $B);
$resultado = maior($resultadoAB, $C);

echo "O maior é: $resultado";

?>