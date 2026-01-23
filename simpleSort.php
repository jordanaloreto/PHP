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
function ordemCrescente($A, $B, $C){
    $array = [$A, $B, $C];
    sort($array); // crescente
    return $array;
}

function ordemDecrescente($A, $B, $C){
    $array2 = [$A, $B, $C];
    rsort($array2); // decrescente
    return $array2;
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

$resultado1 = ordemCrescente($A, $B, $C);
$resultado2 = ordemDecrescente($A, $B, $C);

echo "Crescente: " . implode(", ", $resultado1) . "\n";
echo "Decrescente: " . implode(", ", $resultado2) . "\n";
//  echo n'ao imprime array por isso o implode


?>