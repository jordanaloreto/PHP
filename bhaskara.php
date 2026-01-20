<?php
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

function bhaskara($A, $B, $C){
    if ($A == 0) {
        return null;
    }

    $delta = pow($B, 2) - (4 * $A * $C);
    
    if ($delta < 0) {
        return null;
    }

    $x1 = (-$B + sqrt($delta)) / (2 * $A);
    $x2 = (-$B - sqrt($delta)) / (2 * $A);

    return [$x1, $x2];
}

// quando tem de rtornar mais de uma coisa, tem que retornar um array, se retorna array desempacota com o List

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

$resultado = bhaskara($A, $B, $C);

if ($resultado === null) {
    echo "Nao possui raizes reais\n";
} else {
    list($x1, $x2) = $resultado;
    echo "x1 = $x1\n";
    echo "x2 = $x2\n";
}

?>