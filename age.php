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

        echo "Digite apenas numeros inteiros.\n";
    }
}

function idadeEmDias($A){
    $anos = intdiv($A, 365);
    $A = $A % 365;

    $meses = intdiv($A, 30);
    $A = $A % 30;

    $dias = $A;

    return [$anos, $meses, $dias];
}

$A = lerNumero("");

list($anos, $meses, $dias) = idadeEmDias($A);

echo $anos . " Ano(s)\n";
echo $meses . " Mes(es)\n";
echo $dias . " Dia(s)\n";



?>