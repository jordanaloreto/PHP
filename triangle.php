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
function perimetroArea($A, $B, $C){
    if($A + $B > $C && $A + $C > $B && $B + $C > $A){
        $perimetro = $A + $B + $C;
        echo "Perimetro = " . number_format($perimetro, 1) . "\n";
    }else{
        $area = (($A + $B) * $C) / 2;
        echo "Area = " . number_format($area, 1) . "\n";
    }
}

$A = lerNumero("A? ");
$B = lerNumero("B? ");
$C = lerNumero("C? ");

perimetroArea($A, $B, $C);
?>