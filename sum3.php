<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(is_numeric($valor)){
            return $valor;
        }

        echo "Apenas numeros.\n";
    }
}

function somar($A, $B){
    return $A + $B;
}

$A = lerNumero("A?");
$B = lerNumero("B?");

$resultado = somar($A, $B);

echo "Soma = $resultado";
?>
