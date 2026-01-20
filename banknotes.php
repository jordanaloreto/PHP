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

function banknotes($A){
    $notas = [100,50,20,10,5,2,1];

    echo $A. "\n";

    foreach($notas as $nota){
        $quantidade = intdiv($A, $nota);
        echo $quantidade . " nota(s) de R$ $nota"."\n";
        $A = $A % $nota;
    }
}

$A = lerNumero("A? ");
banknotes($A);

?>